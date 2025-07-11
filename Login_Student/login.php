<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student_Login</title>
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
    <div class="container p-5 ">
        <div class=" justify-content-center align-items-center">
        
    <?php
    if(isset($_POST["login"])) {
        $email = $_POST["Email"];
        $password = $_POST["Password"];
        require_once("database.php");
        
        // Fetch student with matching email
        $sql = "SELECT * FROM student WHERE Email='$email'";
        $result = mysqli_query($condition, $sql);
        $user = mysqli_fetch_array($result);

        if($user) {
            // Check if MA-Approval is "Active"
            if ($user["MA-Approval"] === "Active") {
                // Verify hashed password
                if(password_verify($password, $user["Password"])) {
                    session_start();
                    $_SESSION["Email"] = $email;
                    header("Location: ../Student_Dashboard/Student_index.php");
                    die();
                } else {
                    ?>
                    <div class='alert alert-danger alert-dismissible fade show my-3 mx-3'>
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    <strong>Info!</strong>Password doesn't match</div>
                    <?php ;
                }
            } else {
                ?>
                    <div class='alert alert-danger alert-dismissible fade show my-3 mx-3'>
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    <strong>Info!</strong>MA not Approved yet!</div>
                    <?php ;
            }
        } else {
            ?>
            <div class='alert alert-danger alert-dismissible fade show my-3 mx-3'>
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    <strong>Info!</strong>Email doesn't match</div>
                    <?php ;
        }
    }
?>  
        <header class="d-flex justify-content-between my-3">
            <h1> Student Login </h1>
            <div>
                <a href="../Login_button/login.php" class="btn btn-danger">Back</a>
            </div>
        </header>
        <div class="row">   
                <div class="col-md-4">
                <img src="../icons/anim-b/student.gif" class="img-fluid rounded" alt="Image">
                </div>
        <div class="col-md-8">    
            <form action="login.php" method="post" class="my-4">
                <div class="form-group my-3" >
                    <input type="text" name="Email" placeholder="Email" class="form-control">
                </div>
                <div class="form-group my-3">
                    <input type="password" name="Password" placeholder="Password" class="form-control">
                </div>
                <div class="form-btn my-2">
                    <input type="submit" value="Login" name="login" class="btn btn-primary">
                </div>
            </form>
            <div class="mt-3">
                <p>Not register yet <a href="registration.php">Register Here</a></p>
            </div>
        </div>
        </div>
    </div>
</body>
</html>
