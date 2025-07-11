<?php
session_start();
if (!isset($_SESSION["Email"])){
    header("Location: ../Login_button/login.php");
}
?>
<!DOCTYPE html>
<html lang="en" data-bs-theme="white">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lecturer</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Bootstrap Icons CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
  <link href="custom-styles.css" rel="stylesheet"> <!-- Include custom CSS file -->
  <style>
    .card img{
        max-height: 300px;
    }
    .head-card img{
        max-height: 600px;
    }
    .head-card{
        background: rgba(0, 0, 0, 0.1); /* semi-transparent white */
        color:white;
        backdrop-filter: blur(10px);
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.9); /* Adjust the shadow values as needed */
    }
    .custom-card {
        width: 275px;
        background: rgba(255, 255, 255, 0.1); /* semi-transparent white */
        color:white;
        backdrop-filter: blur(10px);
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.9); /* Adjust the shadow values as needed */
        /* Add other styles as needed */
    }
    .glass-effect {
        background: rgba(0, 0, 0, 0.32); /* semi-transparent white */
        color:white;
        backdrop-filter: blur(10px);
        -webkit-backdrop-filter: blur(10px);
        margin-top:20px;
        border-radius: 20px;
        border: 1px solid rgba(0, 0, 0, 0.53);
    }
    .offcanvas-center {
        width: 80vw;
        height: 80vh;
        top: 10%;
        left: 10%;
        transform: translate(0%, 0%);
        display: flex;
        align-items: center;
        justify-content: center;
        transition: opacity 0.3s ease-in-out, transform 0.3s ease-in-out;
        opacity: 0;
    }

    .offcanvas.show {
        opacity: 1;
    }

    .carousel-item img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .offcanvas-body {
        padding: 0;
        width: 100%;
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    @keyframes slideIn {
        from {
            transform: translateX(-100%);
        }
        to {
            transform: translateX(0);
        }
    }

    .carousel {
        animation: slideIn 1s ease-in-out;
    }
</style>
</head>
<body>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar content -->
    <ul class="nav flex-column">

        <li class="nav-item">
        <a class="nav-link" href="Lecturer_index.php" data-bs-toggle="tooltip" data-bs-placement="right" title="Home">
            <i class="bi bi-house"></i>
        </a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="Course_List/Course_List.php" data-bs-toggle="tooltip" data-bs-placement="right" title="Course List">
            <i class="bi bi-book"></i>
        </a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="Course_Allocation/Course_Allocation.php" data-bs-toggle="tooltip" data-bs-placement="right" title="Course Allocation">
            <i class="bi bi-grid-3x3-gap"></i>
        </a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="Time_Schedule/Time_Schedule.php" data-bs-toggle="tooltip" data-bs-placement="right" title="Time Schedule">
            <i class="bi bi-journal-check"></i>
        </a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="Report/Report.php" data-bs-toggle="tooltip" data-bs-placement="right" title="Report">
            <i class="bi bi-file-earmark-bar-graph"></i>
        </a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="Password_Reset/Password_Reset.php" data-bs-toggle="tooltip" data-bs-placement="right" title="Password Reset">
            <i class="bi bi-key"></i>
        </a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="../Login_Lecturer/logout.php" data-bs-toggle="tooltip" data-bs-placement="right" title="Logout">
            <i class="bi bi-door-closed"></i>
        </a>
        </li>
    </ul>
  </div>

  <!-- Top Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
    <a class="navbar-brand my-1" href="#" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithCarousel" aria-controls="offcanvasWithCarousel"><h3><i class="bi bi-columns-gap"></i></h3></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active " aria-current="page" href="Lecturer_Dashboard\Lecturer_index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="Course_List/Course_List.php">Course List</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="Course_Allocation/Course_Allocation.php">Course Allocation</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="Time_Schedule/Time_Schedule.php">Time Schedule</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="Report/Report.php">Report</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="Password_Reset/Password_Reset.php">Reset Password</a>
          </li>
          <li class="nav-item">
            <a class="nav-link btn btn-outline-danger btn-sm" href="../Login_Lecturer/logout.php"><span class="bi bi-box-arrow-right"></span> Logout</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
<!-- Offcanvas Component -->
<div class="offcanvas offcanvas-center" tabindex="-1" id="offcanvasWithCarousel" aria-labelledby="offcanvasWithCarouselLabel">
      <div class="offcanvas-body">
          <!-- Bootstrap Carousel -->
          <div id="carouselExampleCaptions" class="carousel slide h-100 w-100" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3"></button>
            </div>
            <div class="carousel-inner h-100">
                <div class="carousel-item active h-100">
                    <img src="../icons/info-b/1.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item h-100">
                    <img src="../icons/info-b/2.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item h-100">
                    <img src="../icons/info-b/3.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item h-100">
                    <img src="../icons/info-b/4.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
          </div>
      </div>
  </div>
  
  <!-- Bootstrap JS and Tooltip -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
  <script>
      var myCarousel = document.querySelector('#carouselExampleCaptions');
      var carousel = new bootstrap.Carousel(myCarousel, {
          interval: 5500, // 5.5 seconds
          ride: 'carousel'
      });

      var offcanvasElement = document.getElementById('offcanvasWithCarousel');
      var offcanvasInstance = new bootstrap.Offcanvas(offcanvasElement);

      // Close offcanvas when clicking outside of it
      document.addEventListener('click', function(event) {
          if (!offcanvasElement.contains(event.target) && !event.target.closest('[data-bs-toggle="offcanvas"]')) {
              offcanvasInstance.hide();
          }
      });
  </script>
    <!-- Page content -->
<div class="content"> 
    <?php
        //session_start();
        if(isset($_SESSION["reset"])){
            ?>
            <div class='alert alert-success alert-dismissible fade show my-3'>
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            <strong>Info!</strong>
            <?php
            echo $_SESSION["reset"];
            unset($_SESSION["reset"]);
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
    <?php
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

        <div class="container">
            <?php
                $email=$_SESSION['Email'];
                include("connect.php");
                $sql ="SELECT * FROM lecturer WHERE Email='$email'";
                $result=mysqli_query($conn,$sql);
                $row=mysqli_fetch_array($result);
                $LectureID =$row["Lecture-ID"];
                
                ?>
                <div class="row">   
                    <div class="col-md-2">
                        <img src="../icons/anim-b/user.gif" class="img-fluid rounded" alt="Image">
                    </div>
                    <div class="col-md-6">
                        <div class="card head-card mt-5"> 
                            <div class="card-body">
                                <p class="list-group-item h5 fw-bold fst-italic text-center">Welcome : <?php echo $row["FirstName"];?> <?php echo $row["MidName"]?> <?php echo $row["LastName"]?></p>
                                <p class="list-group-item h5 fw-bold fst-italic text-center">Email : <?php echo $row["Email"];?></p>    
                            </div>
                        </div>
                    </div>
                </div>
            <div class="card head-card glass-effect p-3">
                <div class="card-body">
                    <h1 class="text-center text-white"><i class="bi bi-clipboard-check"></i> View Attendance</h1>
                    <br>
                    <?php
                        include("connect.php");

                        $query = "SELECT COUNT(*) as pendingCount FROM CourseAllocation ca 
                                WHERE `Lecture-ID`='$LectureID'";
                        $result = mysqli_query($conn, $query);
                        $row = mysqli_fetch_assoc($result);
                        $pendingCount = $row['pendingCount'];
                        $rowsNeeded = ceil($pendingCount / 4);
                        ?>
                        <a href="Report/Report.php" class="btn btn-primary position-relative">
                        <i class="bi bi-box-seam"></i> View All Attendance
                            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                <?php echo $pendingCount; ?>
                                <span class="visually-hidden">unread messages</span>
                            </span>
                        </a>

                        <?php
                        $sql = "SELECT c.* , ca.*
                                FROM courseallocation ca
                                JOIN course c ON c.CourseCode = ca.CourseCode
                                WHERE ca.`Lecture-ID` = '$LectureID'
                                ORDER BY ca.Batch DESC";
                        $result_details = mysqli_query($conn, $sql);
                        if ($result_details && mysqli_num_rows($result_details) > 0) {
                            for ($i = 0; $i < $rowsNeeded; $i++) {
                                echo '<div class="row">';
                                for ($j = 0; $j < 4 && $pendingCount > 0; $j++, $pendingCount--) {
                                    $row_details = mysqli_fetch_assoc($result_details); // Fetch each row's details
                                    if ($row_details) {
                                        echo '<div class="card mx-2 my-3 custom-card">';
                                        echo '<script src="https://cdn.lordicon.com/lordicon.js"></script>
                                            <lord-icon
                                            src="https://cdn.lordicon.com/oqaajvyl.json"
                                            trigger="hover"
                                            colors="primary:#4fd3ff,secondary:#30fbf1"
                                            style="width:240px;height:240px">
                                            </lord-icon>';
                                        echo '<hr>'; // Optional: Remove this line if not needed
                                        echo '<div class="card-body">';
                                        echo '<p class="card-text">Course: ' . $row_details['CourseName'] . '</p>';
                                        echo '<p class="card-text">Course ID: ' . $row_details['CourseCode'] . '</p>';
                                        echo '<a href="Report/Report_take.php?AllocationID=' . htmlspecialchars($row_details['AllocationID'], ENT_QUOTES, 'UTF-8') . '" class="btn btn-danger"><i class="bi bi-hand-index"></i> View Attendance </a>';
                                        echo '</div>';
                                        echo '</div>';
                                    }
                                }
                                echo '</div>';
                            }
                        } else {
                            echo '<img src="../icons/not-found/view-attendance-b.png" class="img-view-attendance" alt="Image">';
                        }
                        ?>
                </div>
            </div>
        </div>
        <?php include 'footer.php'; ?>
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