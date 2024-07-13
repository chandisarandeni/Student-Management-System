<?php
    session_start();

    if ($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        include 'connection.php';

        $NIC = $_POST['NIC'];
        $Branch = $_POST['Branch'];

        $stmt = $conn-> prepare("SELECT * FROM student_data WHERE NIC = ? AND Branch = ?");
        $stmt->bind_param("ss",$NIC,$Branch);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows >0)
        {
            $user = $result->fetch_assoc();
            $_SESSION['loggedin'] = true;
            $_SESSION['user'] = $user;
            header('Location: myProfile.php');
            exit();
        }
        else
        {
            //echo "Invalid login credentials";
            echo "<script type='text/javascript'>alert('Invalid NIC or Branch');</script>";
            echo "<meta http-equiv='refresh' content='0;url=loginpage.php'>";
        }
    }
?>