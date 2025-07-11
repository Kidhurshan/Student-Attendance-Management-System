<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        body {
            background-image: url('../icons/background/1.jpg'); /* Replace with your background image */
            background-size: cover;
            background-position: center;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: 'Roboto', sans-serif;
        }
        .container {
            background-color: #191c24; /* Semi-transparent white background */
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            width: 500px;
        }
        .container img {
            width: auto; /* Ensures the logo is displayed at its original size */
            max-height: 500px; /* Adjust the height as needed */
            margin-bottom: 10px;
        }
        .btn-primary {
            background-image: linear-gradient(to right top, #0064a5, #0272b9, #0481ce, #0390e3, #009ff9);
            border: none;
        }
        .btn-primary:hover {
            background-color: #022d5c;
        }
    </style>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>
<?php
if(isset($_POST["enter"])){
    $email = $_POST["Email"];
    $password = $_POST["Password"];
    $passwordRepeat = $_POST["repeat_password"];

    $passwordHash = password_hash($password, PASSWORD_DEFAULT);

    $errors = array();

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        array_push($errors,"Email is not valid");
    }
    if(strlen($password) < 8){
        array_push($errors,"Password must be at least 8 characters long");
    }
    if($password !== $passwordRepeat){
        array_push($errors,"Password does not match");
    }

    require_once "database.php";
    $sql = "SELECT * FROM student WHERE Email='$email' AND `MA-Approval`='Not'";
    $result = mysqli_query($condition, $sql);
    $rowCount = mysqli_num_rows($result);

    if($rowCount <= 0){
        array_push($errors,"Email is invalid or Already registered!");
    }

    if(count($errors) > 0){
        foreach($errors as $error){
            ?>
            <div class='alert alert-danger alert-dismissible fade show my-3 mx-3'>
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            <strong>Info!</strong>$error</div>
            <?php ;
        }
    } else {
        $sql = "UPDATE student SET Password=?, `MA-Approval`='Pending' WHERE Email=?";
        $stmt = mysqli_stmt_init($condition);
        $prepareStmt = mysqli_stmt_prepare($stmt, $sql);
        if($prepareStmt){
            mysqli_stmt_bind_param($stmt, "ss", $passwordHash, $email);
            mysqli_stmt_execute($stmt);
            echo "<div class ='alert alert-success'>Password updated successfully</div>";
        } else {
            die("Something went wrong");
        }
    }
}
?>


    <div class="container my-3">
    <header class="d-flex justify-content-between my-3">
            <h1> Student Register</h1>
    </header>
    <div class="row">   
                <div class="col-md-4">
                <img src="../icons/anim-b/edit.gif" class="img-fluid rounded" alt="Image">
                </div>
    <div class="col-md-8"> 
        <form action="registration.php" method ="post">
            <div class="form-group my-3">
                <input type = "email" class = "form-control" name = "Email" placeholder= "Email:">
            </div>
            <div class="form-group my-3">
                <input type = "password" class = "form-control" name = "Password" placeholder= "Password:">
            </div>
            <div class="form-group my-3">
                <input type = "password" class = "form-control" name = "repeat_password" placeholder= "Repeat Password:">
            </div>
            <div class="form-btn my-2">
                <input type = "submit" class = "btn btn-primary" name = "enter" value="Register">
            </div>
        </form>
        <div class="mt-3">
            <p>Already registered <a href="login.php">Login Here</a></p>
        </div>
    </div>
    </div>
</body>
</html>