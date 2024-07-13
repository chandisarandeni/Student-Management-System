<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include 'connection.php';

    if ($conn->connect_error) {
        die("Connection Failed: " . $conn->connect_error);
    }

    $Name = $_POST['Name'];
    $St_Address = $_POST['St_Address'];
    $NIC = $_POST['NIC'];
    $Course = $_POST['Course'];
    $Branch = $_POST['Branch'];

    // Prepare an SQL statement with placeholders
    $sql = "INSERT INTO student_data (Name, St_Address, NIC, Course, Branch) VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);

    if ($stmt) {
        // Bind parameters to the placeholders
        $stmt->bind_param("sssss", $Name, $St_Address, $NIC, $Course, $Branch);

        // Execute the statement
        if ($stmt->execute()) {
            $_SESSION['loggedin'] = true;
            $_SESSION['user'] = [
                'NIC' => $NIC,
                'Name' => $Name,
                'St_Address' => $St_Address,
                'Course' => $Course,
                'Branch' => $Branch
            ];
            $message = "Student Details Updated Successfully!";
            echo "<script type='text/javascript'>alert('$message');</script>";
            echo "<meta http-equiv='refresh' content='0;url=loginPage.php'>";
        } else {
            // Handle execution error
            $error = "Error: " . $stmt->error;
            echo $error;
        }

        // Close the statement
        $stmt->close();
    } else {
        // Handle preparation error
        $error = "Error: " . $conn->error;
        echo $error;
    }

    // Close the connection
    $conn->close();
}
?>
