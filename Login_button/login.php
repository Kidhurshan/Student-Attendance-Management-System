<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
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
        .logo {
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 250px; /* Adjust size as needed */
        }
        .btn-primary {
            background-image: linear-gradient(to right top, #0064a5, #0272b9, #0481ce, #0390e3, #009ff9);
            border: none;
        }
        .btn-primary:hover {
            background-color: #022d5c;
        }
    </style>
</head>
<body>
    <div class="container text-center">
        <?php
        if(isset($_POST["login"])){
            $email = $_POST["Email"];
            require_once("database.php"); 
        
            $sql = "SELECT userType FROM user WHERE Email='$email'";
            $result = mysqli_query($condition, $sql);
            $user = mysqli_fetch_array($result);
        
            if($user){
                $userType = $user["userType"];
        
                session_start();
                $_SESSION["userType"] = $userType; 
        
                if ($userType === "Student") {
                    header("Location: ../Login_Student/login.php"); 
                    exit();
                } elseif ($userType === "Lecturer") {
                    header("Location: ../Login_Lecturer/login.php"); 
                    exit();
                } elseif ($userType === "MA") {
                    header("Location: ../Login_MA/login.php"); 
                    exit();
                } else {
                    echo "<div class='alert alert-danger'>Unknown user type.</div>";
                }
            } else {
                echo "<div class='alert alert-danger'>Email not found.</div>";
            }
        }
        ?> 
        <img src="../icons/logo/1.png" alt="Logo" class="logo">
        <h1 class="my-3 ">Student Attendance Management System</h1>
        <form action="login.php" method="post" class="my-10">
            <div class="form-floating mb-3">
                <input type="text" id="email" name="Email" placeholder="Enter email" class="form-control">
                <label for="email">Email</label>
            </div>
            <div class="form-floating mb-3">
                <input type="submit" value="Login" name="login" class="btn btn-primary w-100">
            </div>
        </form>
    </div>
</body>
</html>
