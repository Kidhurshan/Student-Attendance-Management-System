
<?php
// Include database connection
include_once '../connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $email = $_POST['email'];
    $old_password = $_POST['old_password'];
    $new_password = $_POST['new_password'];
    $repeat_password = $_POST['repeat_password'];

    // Check if new password and repeat password match
    if ($new_password != $repeat_password) {
        // Redirect back with error message
        session_start();
        $_SESSION["error"] = "New password and repeat password do not match.";
        header("Location: ../Student_index.php");
        exit();
    }

    // Validate old password and email from the database
    $query = "SELECT * FROM student WHERE Email = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $hashed_password = $row['Password'];

        // Verify old password
        if (password_verify($old_password, $hashed_password)) {
            // Hash the new password
            $hashed_new_password = password_hash($new_password, PASSWORD_DEFAULT);

            // Update password in the database
            $update_query = "UPDATE student SET Password = ? WHERE Email = ?";
            $update_stmt = $conn->prepare($update_query);
            $update_stmt->bind_param("ss", $hashed_new_password, $email);
            $update_stmt->execute();

            // Redirect with success message
            session_start();
            $_SESSION["reset"] = "Password updated successfully.";
            header("Location: ../Student_index.php");
            exit();
        } else {
            // Redirect back with error message
            session_start();
            $_SESSION["error"] = "Invalid old password.";
            header("Location: ../Student_index.php");
            exit();
        }
    } else {
        // Redirect back with error message
        session_start();
        $_SESSION["error"] = "Invalid email.";
        header("Location: ../Student_index.php");
        exit();
    }

    // Close database connection
    $stmt->close();
    $update_stmt->close();
    $conn->close();
}
?>


<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Reset Password</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Bootstrap Icons CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
  <link href="../custom-styles.css" rel="stylesheet"> <!-- Include custom CSS file -->
</head>
<body>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar content -->
    <ul class="nav flex-column">

        <li class="nav-item">
        <a class="nav-link" href="../Student_index.php" data-bs-toggle="tooltip" data-bs-placement="right" title="Home">
            <i class="bi bi-house"></i>
        </a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="../Student_Attendance/Attendance.php" data-bs-toggle="tooltip" data-bs-placement="right" title="Attendance">
            <i class="bi bi-journal-check"></i>
        </a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="../Student_Password_Reset/Password_Reset.php" data-bs-toggle="tooltip" data-bs-placement="right" title="Password Reset">
            <i class="bi bi-key"></i>
        </a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="../../Login_Student/logout.php" data-bs-toggle="tooltip" data-bs-placement="right" title="Logout">
            <i class="bi bi-door-closed"></i>
        </a>
        </li>
    </ul>
  </div>

  <!-- Top Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"><h1 class="my-10">A</h1></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link  " aria-current="page" href="../Student_index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="../Student_Attendance/Attendance.php">Attendance</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="../Student_Password_Reset/Password_Reset.php">Reset Password</a>
          </li>
          <li class="nav-item">
            <a class="nav-link btn btn-outline-danger btn-sm" href="../../Login_Student/logout.php"><span class="bi bi-box-arrow-right"></span> Logout</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

    <!-- Page content -->
<div class="content">
  <div class="card head-card glass-effect p-3">
    <div class="card-body">
            <h1 class="text-white text-center"><i class="bi bi-file-earmark-lock"></i> Reset Password</h1>
        <div class="container mt-3">
          <div class="row">   
              <div class="col-md-2">
                  <img src="../../icons/anim-b/password.gif" class="img-fluid rounded" alt="Image">
              </div>
              <div class="col-md-8">
                <form action="Password_Reset.php" method="POST">
                  <div class="mb-3 mt-3 input-group input-group-md">
                    <span class="input-group-text" id="email-label"> Email</span>
                      <input type="email" name="email" class="form-control" id="email" aria-label="Email" aria-describedby="email-label" required>
                  </div>
                  <div class="mb-3 mt-3 input-group input-group-md">
                    <span class="input-group-text" id="old-password-label"><i class="bi bi-lock"></i>  Old Password</span>
                      <input type="password" name="old_password" class="form-control" id="old_password" aria-label="Old Password" aria-describedby="old-password-label" required>
                  </div>
                  <div class="mb-3 mt-3 input-group input-group-md">
                    <span class="input-group-text" id="new-password-label"><i class="bi bi-lock"></i>  New Password</span>
                      <input type="password" name="new_password" class="form-control" id="new_password" aria-label="New Password" aria-describedby="new-password-label" required>
                  </div>
                  <div class="mb-3 mt-3 input-group input-group-md">
                  <span class="input-group-text" id="repeat-password-label"><i class="bi bi-lock"></i>  Repeat Password</span>
                      <input type="password" name="repeat_password" class="form-control" id="repeat_password" aria-label="Repeat Password" aria-describedby="repeat-password-label" required>
                  </div>
                  <button type="submit" class="btn btn-success btn-block btn-md mb-5"><i class="bi bi-arrow-repeat"></i> Reset Password</button>
                </form>
              </div>
          </div>
        </div>
    </div>
  </div>
</div>
    <!-- Include Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Bootstrap JS and Tooltip -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
    <script>
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
        var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl);
        });
    </script>
</body>
</html>