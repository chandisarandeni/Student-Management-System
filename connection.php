<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbName = "imbs_final_web";

    $conn = new mysqli($servername,$username,$password,$dbName);

    if($conn->connect_error)
    {
        die("Connection Failed".$conn->connect_error);
    }
    echo "";
?>