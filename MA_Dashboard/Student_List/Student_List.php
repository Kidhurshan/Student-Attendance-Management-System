<?php
session_start();
if (!isset($_SESSION["Email"])){
    header("Location: ../../Login_button/login.php");
}
?>

<?php
    function validate($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
?>

<?php
    include("../connect.php");
    if (isset($_GET['Batch']) && $_GET['Batch'] != '') {
        $Batch = validate($_GET['Batch']);
        // Prepare and execute SQL query
        $sql = "SELECT CONCAT(LEFT(FirstName, 1), '. ', LEFT(MidName, 1), '. ', LastName) AS StudentName, RegNo, `MA-Approval`, Email
                FROM Student 
                WHERE Batch = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $Batch);
        $stmt->execute();
        $result = $stmt->get_result();
    } else {
        $sql = "SELECT CONCAT(LEFT(FirstName, 1), '. ', LEFT(MidName, 1), '. ', LastName) AS StudentName, RegNo, `MA-Approval`, Email
        FROM Student";
        $result = $conn->query($sql);
    }

    if (!$result) {
        die("Invalid Query: " . $conn->error);
    }
?>

<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bootstrap Sidebar and Navbar</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Bootstrap Icons CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
  <link href="../custom-styles.css" rel="stylesheet"> <!-- Include custom CSS file -->
  <style>
    .head-card img{
        max-height: 600px;
    }
    .head-card{
        background: rgba(57, 57, 57, 0.5); /* semi-transparent white */
        color:white;
        backdrop-filter: blur(10px);
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.9); /* Adjust the shadow values as needed */
    }
    </style>
</head>
<body>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar content -->
    <ul class="nav flex-column">

        <li class="nav-item">
        <a class="nav-link" href="../MA_index.php" data-bs-toggle="tooltip" data-bs-placement="right" title="Home">
            <i class="bi bi-house"></i>
        </a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="../Course_List/Course_List.php" data-bs-toggle="tooltip" data-bs-placement="right" title="Course List">
            <i class="bi bi-book"></i>
        </a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="../Student_List/Student_List.php" data-bs-toggle="tooltip" data-bs-placement="right" title="Student List">
            <i class="bi bi-person"></i>
        </a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="../Lecture_List/Lecture_List.php" data-bs-toggle="tooltip" data-bs-placement="right" title="Lecturer List">
            <i class="bi bi-people"></i>
        </a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="../Course_Allocation/Course_Allocation.php" data-bs-toggle="tooltip" data-bs-placement="right" title="Course Allocation">
            <i class="bi bi-grid-3x3-gap"></i>
        </a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="../Attendance/Attendance.php" data-bs-toggle="tooltip" data-bs-placement="right" title="Attendance">
            <i class="bi bi-journal-check"></i>
        </a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="../Report/Report.php" data-bs-toggle="tooltip" data-bs-placement="right" title="Report">
            <i class="bi bi-file-earmark-bar-graph"></i>
        </a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="../Password_Reset/Password_Reset.php" data-bs-toggle="tooltip" data-bs-placement="right" title="Password Reset">
            <i class="bi bi-key"></i>
        </a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="../../Login_Lecturer/logout.php" data-bs-toggle="tooltip" data-bs-placement="right" title="Logout">
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
            <a class="nav-link  " aria-current="page" href="../MA_index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../Course_List/Course_List.php">Course List</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="../Student_List/Student_List.php">Student List</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="../Lecture_List/Lecture_List.php">Lecturer List</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../Course_Allocation/Course_Allocation.php">Course Allocation</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="../Attendance/Attendance.php">Attendance</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="../Report/Report.php">Report</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="../Password_Reset/Password_Reset.php">Reset Password</a>
          </li>
          <li class="nav-item">
            <a class="nav-link btn btn-outline-danger btn-sm" href="../../Login_Lecturer/logout.php"><span class="bi bi-box-arrow-right"></span> Logout</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
<div class="content">
    <div class="card head-card p-3 mt-2">
        <div class="card-body">
            <?php
                //session_start();
                if(isset($_SESSION["update"])){
                    ?>
                    <div class='alert alert-success alert-dismissible fade show my-3'>
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    <strong>Info!</strong>
                    <?php
                    echo $_SESSION["update"];
                    unset($_SESSION["update"]);
                    ?>
                    </div>
                    <?php
                }
                ?>
            <?php
                if(isset($_SESSION["error"])){
                    ?>
                    <div class='alert alert-danger alert-dismissible fade show my-3'>
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    <strong>Info!</strong>
                    <?php
                    echo $_SESSION["error"];
                    unset($_SESSION["error"]);
                    ?>
                    </div>
                    <?php
                }
                ?>
            <?php
                if(isset($_SESSION["delete"])){
                    ?>
                    <div class='alert alert-success alert-dismissible fade show'>
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    <strong>Info!</strong>
                    <?php
                    echo $_SESSION["delete"];
                    unset($_SESSION["delete"]);
                    ?>
                    </div>
                    <?php
                }
                ?>
                <h1 class="text-white text-center my-2"><i class="bi bi-mortarboard"></i> Student List</h1>
               <br> 
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-sm-12">
                                <form action="" method="GET">
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <select name="Batch" required class="form-select">
                                                <option value="">Batch</option>
                                                <option value="E20" <?= isset($_GET['Batch']) && $_GET['Batch'] == 'E20' ? 'selected' : '' ?>>E20</option>
                                                <option value="E21" <?= isset($_GET['Batch']) && $_GET['Batch'] == 'E21' ? 'selected' : '' ?>>E21</option>
                                                <option value="E22" <?= isset($_GET['Batch']) && $_GET['Batch'] == 'E22' ? 'selected' : '' ?>>E22</option>
                                                <option value="E23" <?= isset($_GET['Batch']) && $_GET['Batch'] == 'E23' ? 'selected' : '' ?>>E23</option>
                                                <option value="E24" <?= isset($_GET['Batch']) && $_GET['Batch'] == 'E24' ? 'selected' : '' ?>>E24</option>
                                            </select>
                                        </div>                           
                                        <div class="col-sm-4">
                                            <button type="submit" class="btn btn-primary btn-resize "><i class="bi bi-funnel"></i> Filter</button>
                                            <a href="Student_List.php" class="btn btn-danger btn-resize "><i class="bi bi-x-octagon"></i> Reset</a>
                                        </div>
                                        <div class="col-sm-4">
                                            <a class="btn btn-primary btn-resize " href="create.php" role="button"><i class="bi bi-person-add"></i> New Student</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <br>

                    <table class="table table-bordered my-3 table-hover text-center">
                        <thead class="table-dark text-center">
                            <tr>
                                <th>Reg No</th>
                                <th>Student Name</th>
                                <th>Email</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            while ($row = $result->fetch_assoc()) {
                                ?>
                                    <tr>                          
                                        <td><?php echo $row['RegNo']; ?></td>
                                        <td><?php echo $row['StudentName']; ?></td>
                                        <td><?php echo $row['Email']; ?></td>
                                        <td>
                                            <?php
                                            if ($row['MA-Approval'] == 'Active') {
                                                echo '<span class="badge badge-success">' . $row['MA-Approval'] . '</span>';
                                            } elseif ($row['MA-Approval'] == 'Pending') {
                                                echo '<span class="badge badge-warning">' . $row['MA-Approval'] . '</span>';
                                            } elseif ($row['MA-Approval'] == 'Not') {
                                                echo '<span class="badge badge-danger">' . $row['MA-Approval'] . '</span>';
                                            }
                                            ?>
                                        </td>
                                        <td>
                                            <a class="btn btn-primary btn-sm btn-resize" href="edit.php?RegNo=<?php echo $row['RegNo']; ?>"><i class="bi bi-pencil"></i> Edit</a>
                                            <a class="btn btn-danger btn-sm btn-resize" href="delete.php?RegNo=<?php echo $row['RegNo']; ?>"><i class="bi bi-trash"></i> Delete</a>
                                        </td>
                                    </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
        </div>
    </div>
</div>
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
