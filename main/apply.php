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

  

 

          












<div class="container">
 

  <!-- ./col -->
  

    <section class="h-100">
		<div class="container h-100">
			<div class="row justify-content-md-center h-100 align-center m-5">
				<div class="card-wrapper w-50">
					
					<div class="card fat">
						<div class="card-body p-5">
							<h4 class="card-title  text-center">Apply</h4>
							<form method="POST" class="my-login-validation" novalidate="" action="apply_job.php" enctype="multipart/form-data">
                            <div class="row">
                         
                        </div>
                        
                          <div class="col">
                            <label for="exampleInputEmail1">Gmail</label>

                            <input type="gmail" class="form-control" name="user_gmail" placeholder="Enter gmail" required>
                          </div>
                          

<?php  

$id=$_POST['id'];


?>


                        <div class="form-group">
                          
                          <input type="hidden" name="id" class="form-control" id="exampleInputPassword1" value="<?php echo $id ?>" autocomplete="off" required>
                        </div>
                        <div class="form-group">
                          
                          <input type="hidden" name="user_id" class="form-control" id="exampleInputPassword1" value="<?php echo  $_SESSION['user_id']; ?>" autocomplete="off" required>
                        </div>
                       
                        
                        
                          
                          <div class="col mt-2">
                            <label for="exampleInputEmail1">Upload CV (pdf file)</label>

                            <input type="file" class="form-control" name="file" placeholder="Upload CV" required>
                          </div>
                        
								


								<div class="form-group mt-4">
									<button type="submit" name='submit' class="btn btn-primary btn-block">
										Apply
									</button>
								</div>
								
							</form>
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</section>



      
    
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