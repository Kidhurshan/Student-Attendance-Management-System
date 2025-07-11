<?php
session_start(); 

if(isset($_POST["edit"])){
    include("../connect.php");

    $RegNo = mysqli_real_escape_string($conn,$_POST["RegNo"]);
    $Email = mysqli_real_escape_string($conn,$_POST["Email"]);
    $FirstName  = mysqli_real_escape_string($conn,$_POST["FirstName"]);
    $MidName = mysqli_real_escape_string($conn,$_POST["MidName"]);
    $LastName = mysqli_real_escape_string($conn,$_POST["LastName"]);
    $Batch = mysqli_real_escape_string($conn,$_POST["Batch"]);
    $Approval = mysqli_real_escape_string($conn,$_POST["MA-Approval"]);

    $sql="UPDATE student SET RegNo='$RegNo', Email ='$Email', FirstName='$FirstName', MidName='$MidName', LastName='$LastName', Batch='$Batch', `MA-Approval`='$Approval' WHERE RegNo='$RegNo'";
    $result = mysqli_query($conn,$sql);
    if($result){
        $_SESSION["update"] = "Student Details are Updated";
        header("Location: Student_List.php");
        exit();
    }else{
        die("Error: " . mysqli_error($conn)); 
    }
}else{
    die("Form submission not detected!");
}
?>

