<?php
    if(isset($_GET["CourseCode"])){
        $CourseCode = $_GET["CourseCode"];
        include("../connect.php");
        $sql ="DELETE FROM course WHERE `CourseCode`='$CourseCode'";
        if(mysqli_query($conn, $sql)){
            session_start();
            $_SESSION["delete"] = "Lecturer info Deleted";
            header("Location:Course_List.php");
        }
    }
?>