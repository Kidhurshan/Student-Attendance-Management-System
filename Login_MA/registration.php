<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    if(isset ($_POST["enter"])){
        $email = $_POST["Email"];
        $password = $_POST["Password"];
        $passwordRepeat = $_POST["repeat_password"];

        $passwordHash = password_hash($password,PASSWORD_DEFAULT);

        $errors = array();

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            array_push($errors,"Email is not valid");
        }
        if(strlen($password)<8){
            array_push($errors,"Password must be at least 8 characters long");
        }
        if($password !== $passwordRepeat){
            array_push($errors,"Password does not matching ");
        }
        require_once "database.php";
        $sql = "SELECT * FROM ma WHERE email='$email'";
        $result = mysqli_query($condition, $sql);
        $rowCount = mysqli_num_rows($result);
        if($rowCount > 0){
            array_push($errors,"Email already exists!");
        }
        if(count($errors)>0){
            foreach($errors as $error){
                echo"<div class ='alert alert-danger'>$error</div> ";
            }
        }
         

        else{
            
            $sql = "INSERT INTO ma (email, password) VALUES(?,?)";
            $stmt = mysqli_stmt_init($condition);
            $prepareStmt =mysqli_stmt_prepare($stmt,$sql);
            if($prepareStmt){
                mysqli_stmt_bind_param($stmt,"ss",$email,$passwordHash);
                mysqli_stmt_execute($stmt);
                echo "<div class ='alert alert-success'>You are registered successfully</div>";
            }
            else{
                die("Something went wrong");
            }
        }
    }
    ?>
    <div class="container my-4">
        <form action="registration.php" method ="post">
            <div class="h1 my-3"> Registration </div>
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
        <div class="text-dark my-3">
            <p>Already registered <a href="login.php">Login Here</a></p>
        </div>
    </div>
</body>
</html>