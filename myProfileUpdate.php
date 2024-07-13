<?php
session_start();

// Check if the user is not logged in, then redirect to the login page
if (!isset($_SESSION['loggedin'])) {
    header('Location: loginPage.php');
    exit();
}
$user = $_SESSION['user'];

include 'connection.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
    // Validate and sanitize input
    $Name = htmlspecialchars(trim($_POST['Name']));
    $St_Address = htmlspecialchars(trim($_POST['St_Address']));
    $NIC = ($user['NIC']); // Assuming NIC is passed via POST

    // Check if NIC is provided
    if (empty($NIC)) {
        echo "<script type='text/javascript'>alert('NIC is required');</script>";
        echo "<meta http-equiv='refresh' content='0;url=myProfileEdit.php'>";
        exit();
    }

    // Prepare the SQL statement with an additional NIC parameter
    $stmt = $conn->prepare("UPDATE student_data SET Name = ?, St_Address = ? WHERE NIC = $NIC");
    $stmt->bind_param("ss", $Name, $St_Address);

    // Execute the statement and provide feedback
    if ($stmt->execute()) {
        $message = "Student Details Updated Successfully!";
        echo "<script type='text/javascript'>alert('$message');</script>";
        echo "<meta http-equiv='refresh' content='0;url=loginPage.php'>";
    } else {
        echo "<script type='text/javascript'>alert('Error Occurred: " . $stmt->error . "');</script>";
        echo "<meta http-equiv='refresh' content='0;url=myProfileEdit.php'>";
    }

    // Close the statement
    $stmt->close();
}

// Close the database connection
$conn->close();
?>
