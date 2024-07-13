<?php
session_start();
include 'Connection.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $NIC = $_POST['NIC'];

    // Prepare the SQL DELETE statement
    $stmt = $conn->prepare("DELETE FROM student_data WHERE NIC = $NIC");
    
    if ($stmt) {
        // Bind the NIC parameter to the statement
        $stmt->execute();
        //$stmt->bind_param("s", $NIC);

        // Execute the statement
        if ($stmt->execute()) {
            $message = "Student Deleted Successfully!";
            echo "<script type='text/javascript'>alert('$message');</script>";
            echo "<meta http-equiv='refresh' content='0;url=adminDB.php'>";
        } else {
            $error = "Error: " . $stmt->error;
            echo "<script type='text/javascript'>alert('$error');</script>";
        }

        // Close the statement
        $stmt->close();
    } else {
        $error = "Error: " . $conn->error;
        echo "<script type='text/javascript'>alert('$error');</script>";
    }

    // Close the database connection
    $conn->close();
}
?>
