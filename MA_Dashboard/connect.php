<?php
    $dbhost ="localhost";
    $dbUser = "root";
    $dbPass = "";
    $dbName = "student-attendance-management-system";
    $conn = mysqli_connect($dbhost,$dbUser,$dbPass,$dbName);
    if(!$conn){
        die("Something wrong". mysqli_connect_error());
    }
?>