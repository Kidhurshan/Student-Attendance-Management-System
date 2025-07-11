<?php
    
    if(isset($_POST["edit"])){
        include("../connect.php");
        $FirstName = mysqli_real_escape_string($conn,$_POST["FirstName"]);
        $MidName = mysqli_real_escape_string($conn,$_POST["MidName"]);
        $LastName  = mysqli_real_escape_string($conn,$_POST["LastName"]);
        $profession = mysqli_real_escape_string($conn,$_POST["Profession"]);
        $LectureID = mysqli_real_escape_string($conn,$_POST["Lecture-ID"]);

        $sql="UPDATE lecturer SET FirstName='$FirstName', MidName='$MidName', LastName ='$LastName', Profession='$profession' WHERE `Lecture-ID`='$LectureID'";
        $result = mysqli_query($conn,$sql);
        if($result){
            session_start();
            $_SESSION["update"] = "Lecturer Detail Updated";
            header("Location:Lecture_List.php");
        }else{
            die("Not inserted !");
        }
    }

?>
