<?php
    session_start();

    if ($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        include 'connection.php';

        $adminID = $_POST['adminID'];
        $adminPass = $_POST['adminPass'];

        $stmt = $conn-> prepare("SELECT * FROM adminlogin WHERE adminID = ? AND adminPass = ?");
        $stmt->bind_param("ss",$adminID,$adminPass);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows >0)
        {
            $user = $result->fetch_assoc();
            $_SESSION['loginedin'] = true;
            $_SESSION['user'] = $user;
            header('Location: adminDB.php');
            exit();
        }
        else
        {
            //echo "Invalid login credentials";
            echo "<script type='text/javascript'>alert('Invalid Admin ID or Password');</script>";
            echo "<meta http-equiv='refresh' content='0;url=adminLoginPage.php'>";
        }
    }
?>