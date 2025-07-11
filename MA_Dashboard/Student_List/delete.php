<?php
if (isset($_GET["RegNo"])) {
    $RegNo = $_GET["RegNo"];

    $server_name = "localhost";
    $user_name = "root";
    $password = "";
    $database = "student-attendance-management-system";

    $connection = new mysqli($server_name, $user_name, $password, $database);

    // Check connection
    if ($connection->connect_error) {
        die("Connection failed: " . $connection->connect_error);
    }

    $sql = "DELETE FROM Student WHERE RegNo='$RegNo'";
    $connection->query($sql);

    // Close Connection
    $connection->close();

    // Redirect to the student list page
    header("Location: Student_List.php");
    exit;
}
?>
