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
  <title>Home</title>
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
        background: rgba(0, 0, 0, 0.5); /* semi-transparent white */
        color:white;
        backdrop-filter: blur(10px);
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.9); /* Adjust the shadow values as needed */
    }
    .custom-card {
        width: 290px;
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
        <a class="nav-link" href="MA_index.php" data-bs-toggle="tooltip" data-bs-placement="right" title="Home">
            <i class="bi bi-house"></i>
        </a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="Course_List/Course_List.php" data-bs-toggle="tooltip" data-bs-placement="right" title="Course List">
            <i class="bi bi-book"></i>
        </a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="Student_List/Student_List.php" data-bs-toggle="tooltip" data-bs-placement="right" title="Student List">
            <i class="bi bi-person"></i>
        </a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="Lecture_List/Lecture_List.php" data-bs-toggle="tooltip" data-bs-placement="right" title="Lecturer List">
            <i class="bi bi-people"></i>
        </a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="Course_Allocation/Course_Allocation.php" data-bs-toggle="tooltip" data-bs-placement="right" title="Course Allocation">
            <i class="bi bi-grid-3x3-gap"></i>
        </a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="Attendance/Attendance.php" data-bs-toggle="tooltip" data-bs-placement="right" title="Attendance">
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
        <a class="nav-link" href="../Login_MA/logout.php" data-bs-toggle="tooltip" data-bs-placement="right" title="Logout">
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
            <a class="nav-link active " aria-current="page" href="MA_index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="Course_List/Course_List.php">Course List</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="Student_List/Student_List.php">Student List</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="Lecture_List/Lecture_List.php">Lecturer List</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="Course_Allocation/Course_Allocation.php">Course Allocation</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="Attendance/Attendance.php">Attendance</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="Report/Report.php">Report</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="Password_Reset/Password_Reset.php">Reset Password</a>
          </li>
          <li class="nav-item">
            <a class="nav-link btn btn-outline-danger btn-sm" href="../Login_MA/logout.php"><span class="bi bi-box-arrow-right"></span> Logout</a>
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
            <div class='alert alert-success alert-dismissible fade show my-3'>
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

        <div class="container">
            <?php
                $email=$_SESSION['Email'];
                include("connect.php");
                $sql ="SELECT * FROM ma WHERE Email='$email'";
                $result=mysqli_query($conn,$sql);
                $row=mysqli_fetch_array($result);
                ?>
            <div class="row mt-10">   
                <div class="col-md-2">
                    <img src="../icons/anim-b/presentation.gif" class="img-fluid rounded" alt="Image">
                </div>
                <div class="col-md-6">
                    <div class="card head-card glass-effect p-3">
                        <div class="card-body">
                            <p class="card-title h5 fw-bold fst-italic text-center">
                            <i class="bi bi-person"></i> Welcome : <?php echo $row["FirstName"];?> <?php echo $row["MidName"];?> <?php echo $row["LastName"];?>
                            </p>
                            <p class="card-text h5 fw-bold fst-italic text-center">
                            <i class="bi bi-envelope"></i> Email : <?php echo $row["Email"];?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
                
            <div class="card head-card glass-effect p-3">
                <div class="card-body">
                    <h1 class="text-white text-center"><i class="bi bi-vector-pen"></i> Take Attendance</h1>
                    <br>
                    <?php
                        include("connect.php");

                        // Fetching pending count
                        $query = "SELECT COUNT(*) as pendingCount FROM TimeSchedule WHERE `MA-Action` = 'Not'";
                        $result = mysqli_query($conn, $query);
                        $row = mysqli_fetch_assoc($result);
                        $pendingCount = $row['pendingCount'];
                        $rowsNeeded = ceil($pendingCount / 4);
                        ?>
                        <a href="Attendance/Attendance.php" class="btn btn-primary position-relative">
                        <i class="bi bi-box-seam"></i> See All Attendance
                            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                <?php echo $pendingCount; ?>
                                <span class="visually-hidden">unread messages</span>
                            </span>
                        </a>

                        <?php
                        if($pendingCount==0){
                            echo '<img src="../icons/not-found/take-attendance-b.png" class="img-take-attendance " alt="Image">';
                        }
                        $sql = "SELECT t.*, c.*, l.`Lecture-ID`,l.LastName FROM TimeSchedule t
                                JOIN CourseAllocation ca ON t.AllocationID = ca.AllocationID 
                                JOIN course c ON ca.CourseCode = c.CourseCode
                                JOIN lecturer l ON ca.`Lecture-ID` = l.`Lecture-ID`
                                WHERE t.`MA-Action` = 'Not' 
                                ORDER BY t.Date DESC";
                        $result_details = mysqli_query($conn, $sql);

                        for ($i = 0; $i < $rowsNeeded; $i++) {
                            echo '<div class="row">';
                            for ($j = 0; $j < 4 && $pendingCount > 0; $j++, $pendingCount--) {
                                $row_details = mysqli_fetch_assoc($result_details); // Fetch each row's details
                                echo '<div class="card mx-2 my-3 custom-card">';
                                echo '<div class="row g-0">'; 
                                echo '<div class="col-md-5 d-flex align-items-center justify-content-center">';
                                echo '<script src="https://cdn.lordicon.com/lordicon.js"></script>
                                    <lord-icon
                                    src="https://cdn.lordicon.com/oqaajvyl.json"
                                    trigger="hover"
                                    colors="primary:#4fd3ff,secondary:#30fbf1"
                                    style="width:200px;height:200px">
                                    </lord-icon>';
                                echo '</div>';
                                echo '<div class="col-md-7">'; 
                                echo '<div class="card-body">';
                                echo '<p class="card-text"><i class="bi bi-book"></i> ' . $row_details['CourseName'] . '</p>';
                                echo '<p class="card-text"><i class="bi bi-bookmark-star"></i> ' . $row_details['CourseCode'] . '</p>';
                                echo '<p class="card-text"><i class="bi bi-person-lines-fill"></i> ' . $row_details['LastName'] .'</p>';
                                echo '<p class="card-text"><i class="bi bi-person-vcard"></i> ' . $row_details['Lecture-ID'] .'</p>';
                                echo '<p class="card-text"><i class="bi bi-calendar-minus"></i> ' . $row_details['Date'] . '</p>';
                                echo '<a href="Attendance/AttendanceTake.php?AllocationID=' . $row_details['AllocationID'] . '&ScheduleID=' . $row_details['ScheduleID'] . '" class="btn btn-primary"><i class="bi bi-hand-index-thumb"></i> Take</a>';
                                echo '</div>';
                                echo '</div>'; // Close card body column
                                
                                echo '</div>'; // Close row
                                echo '</div>'; // Close card
                                
                            }
                            echo '</div>';
                        }

                        ?>
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