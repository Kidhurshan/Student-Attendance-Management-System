<?php
session_start();
if (!isset($_SESSION["Email"])) {
    header("Location: ../Login_button/login.php");
}
?>
<!DOCTYPE html>
<html lang="en" data-bs-theme="white">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bootstrap Sidebar and Navbar</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Bootstrap Icons CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
  <link href="custom-styles.css" rel="stylesheet"> <!-- Include custom CSS file -->
  <style>
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
        <a class="nav-link" href="Student_index.php" data-bs-toggle="tooltip" data-bs-placement="right" title="Home">
            <i class="bi bi-house"></i>
        </a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="Student_Attendance/Attendance.php" data-bs-toggle="tooltip" data-bs-placement="right" title="Attendance">
            <i class="bi bi-journal-check"></i>
        </a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="Student_Password_Reset/Password_Reset.php" data-bs-toggle="tooltip" data-bs-placement="right" title="Password Reset">
            <i class="bi bi-key"></i>
        </a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="../Login_Student/logout.php" data-bs-toggle="tooltip" data-bs-placement="right" title="Logout">
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
            <a class="nav-link active " aria-current="page" href="Student_index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="Student_Attendance/Attendance.php">Attendance</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="Student_Password_Reset/Password_Reset.php">Reset Password</a>
          </li>
          <li class="nav-item">
            <a class="nav-link btn btn-outline-danger btn-sm" href="../Login_Student/logout.php"><span class="bi bi-box-arrow-right"></span> Logout</a>
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
        if(isset($_SESSION["create"])){
            ?>
            <div class='alert alert-success alert-dismissible fade show my-3'>
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            <strong>Info!</strong>
            <?php
            echo $_SESSION["create"];
            unset($_SESSION["create"]);
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
<div class="content"> 
    <div class="card head-card glass-effect p-5">
        <div class="card-body">
            <h1 class="text-white text-center">Student Details</h1>
            <?php
                $email=$_SESSION['Email'];
                include("connect.php");
                $sql ="SELECT * FROM student WHERE Email='$email'";
                $result=mysqli_query($conn,$sql);
                $row=mysqli_fetch_array($result);
                ?>
            <div class="row">   
                <div class="col-md-2">
                <img src="../icons/anim-b/graduate.gif" class="img-fluid rounded" alt="Image">
                </div>
                <div class="col-md-8">
                <div class="container mt-3">
                    <div class="input-group input-group-lg mb-3">
                        <span class="input-group-text">Welcome  :</span>
                        <input type="text" class="form-control" value="<?php echo $row["FirstName"];?> <?php echo $row["MidName"]?> <?php echo $row["LastName"]?>" readonly>
                    </div>
                    <div class="input-group input-group-lg mb-3">
                        <span class="input-group-text">Registration No :</span>
                        <input type="text" class="form-control" value="<?php echo $row["RegNo"];?>" readonly>
                    </div>
                    <div class="input-group input-group-lg mb-3">
                        <span class="input-group-text">Email    :</span>
                        <input type="text" class="form-control" value="<?php echo $row["Email"];?>" readonly>
                    </div>
                    <div class="input-group input-group-lg mb-3">
                        <span class="input-group-text">Batch    :</span>
                        <input type="text" class="form-control" value="<?php echo $row["Batch"];?>" readonly>
                    </div>
                    <a href="Update.php?Email=<?php echo $row["Email"];?>" class ="btn btn-danger my-3"><i class="bi bi-pencil"></i> Edit</a>
                </div>
                </div>
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