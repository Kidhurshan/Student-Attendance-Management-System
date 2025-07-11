<?php
$hostName ="localhost";
$dbUser = "root";
$dbPassword = "";
$dbName = "student-attendance-management-system";
$condition = mysqli_connect($hostName,$dbUser,$dbPassword,$dbName);
if(!$condition){
    die("Something went wrong");
}
?>