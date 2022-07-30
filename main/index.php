<?php
session_start();

if(!isset($_SESSION['login']) || $_SESSION['login']!=true){
  header("location: login.php");
  exit;}

  ?>







<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Job Portal</title>
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="includes/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="includes/plugins/summernote/summernote-bs4.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body class="d-flex flex-column min-vh-100">




  
  <nav class="navbar navbar-dark bg-dark sticky-top">

    <div class="container-fluid m-2">
      <a class="navbar-brand" href="index.php">Job Portal</a>
      
      
      <form class="d-flex" role="search" method="POST" action="">
        <input class="form-control me-2" type="search" name="search" placeholder="Search Job" aria-label="Search" value="">
        <button class="btn btn-outline-success text-white" type="submit" name="submit">Search</button>
      </form>
      <a class="navbar-link btn text-white btn-outline-success" href="logout.php">Logout</a>

    </div>

  </nav>
  <br>

  

  <?php
            // Read data from database
            include("dbconnect.php");

            $sql_select = "SELECT * FROM `jobs` WHERE 1";

              if (isset($_POST['submit'])) {

                $search = $_POST['search'];


                $sql_select = "SELECT * FROM `jobs` where job_id like '%$search%' or c_name like '%$search%' or job_title like '%$search%' or job_location like '%$search%' or job_salary like '%$search%'";
                $search = '';
              }

              $result_select = mysqli_query($conn, $sql_select);

              if (mysqli_num_rows($result_select) > 0) {


              ?>

          












<div class="container">
 

  <!-- ./col -->
  <div class="col-md-12">
    <div class="card">

    <?php while ($rows = mysqli_fetch_assoc($result_select)) { ?>




      <div class="card-header">
        <h3 class="card-title">
          <i class="fas fa-text-width"></i>
          <?php echo $rows['job_title'] ?>        </h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <dl class="row">
          
          <dt class="col-sm-2">Company :</dt>
          <dd class="col-sm-2"><?php echo $rows['c_name'] ?></dd>
          <dt class="col-sm-2">Salary :</dt>
          <dd class="col-sm-2"><?php echo $rows['job_salary'] ?></dd>
          <dt class="col-sm-2">Job Type :</dt>
          <dd class="col-sm-2"><?php echo $rows['job_type'] ?></dd>
          <dt class="col-sm-2">Experience :</dt>
          <dd class="col-sm-2"><?php echo $rows['job_experience'] ?></dd>

          <dt class="col-sm-2">Location :</dt>
          <dd class="col-sm-6"><?php echo $rows['job_location'] ?></dd>
          <dt class="col-sm-2">Description :</dt>
          <dd class="col-sm-10"><?php echo $rows['job_description'] ?>
          </dd>

        </dl>
        <div class="card-footer text-muted" style="padding: 5px 15px 4px 15px; ">
          <dl class="row">
            <dd class="col-sm-2 text-muted"><Strong>Date : </Strong><?php echo $rows['job_date'] ?></dd>
            <dt class="col-sm-10 text-end">
              
            <form action="apply.php" method="post">
            <input type="hidden" name="id" value="<?php echo $rows['job_id'] ?>">
            <button type="submit" name="submit" class="btn btn-primary my-2 my-sm-0" data-toggle="modal" data-target="#exampleModal">
                Apply
              </button></form>
              
            </dt>
            
          </dl>
        </div>
        

      </div>


      <?php } ?>
              <?php } else {
              echo "<h1 class='text-center'>No Job Found!</h1>";
            }      ?>




      
    </div>
    <!-- /.card -->
  </div>
  <!-- ./col -->
  <br><br>







  </div>
  

<!-- Remove the container if you want to extend the Footer to full width. -->


  <footer class="bg-dark text-center text-lg-start text-white mt-auto">
    

    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
      © 2022 Copyright:
      <a class="text-white" href="https://github.com/Yasir-Mukthar">Yasir Mukhtar</a>
    </div>
    <!-- Copyright -->
  </footer>


<!-- End of .container -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  <!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="includes/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="includes/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="includes/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="includes/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="includes/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="includes/plugins/moment/moment.min.js"></script>
<script src="includes/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdonus Bootstrap 4 -->
<script src="includes/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="includes/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="includes/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
</body>

</html>