<?php
session_start();
if(isset($_SESSION['login'])){
  header("location: index.php");
}









?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="author" content="Kodinger">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>Sign Up</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/my-login.css">
    <link rel="stylesheet" href="css/my-login.css">
</head>
<body class="my-login-page">

	<section class="h-100">
		<div class="container h-100">
			<div class="row justify-content-md-center h-100 align-center m-5">
				<div class="card-wrapper w-100">
					
					<div class="card fat">
						<div class="card-body">
							<h4 class="card-title  text-center">Sign Up</h4>
							<form method="POST" class="my-login-validation" novalidate="" action="add_user.php">
                            <div class="row">
                          <div class="col">
                            <label for="exampleInputEmail1">User Name</label>

                            <input type="text" class="form-control" name="user_name" placeholder="Enter name" required>
                          </div>
                          <div class="col">
                            <label for="exampleInputEmail1">Contact No</label>

                            <input type="text" class="form-control" name="contact_no" placeholder="Contact No" required>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col">
                            <label for="exampleInputEmail1">Gmail</label>

                            <input type="gmail" class="form-control" name="user_gmail" placeholder="Enter gmail" required>
                          </div>
                          <div class="col">
                            <label for="exampleInputEmail1">Skill</label>

                            <input type="text" class="form-control" name="user_skill" placeholder="Enter Skill" required>
                          </div>
                        </div>



                        <div class="form-group">
                          <label for="exampleInputPassword1">Address</label>
                          <input type="text" name="user_address" class="form-control" id="exampleInputPassword1" placeholder="Address" autocomplete="off" required>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">Gender</label>
                          <div class="row">


                            <div class="col-2" style="margin-left:20px;">
                              <input class="form-check-input" type="radio" name="gender" id="gridRadios1" value="male" checked required>
                              <label class="form-check-label" for="gridRadios1">
                                Male
                              </label>
                            </div>
                            <div class="col-2">
                              <input class="form-check-input" type="radio" name="gender" id="gridRadios2" value="female" required>
                              <label class="form-check-label" for="gridRadios2">
                                Female
                              </label>
                            </div>


                          </div>
                        </div>
                        <div class="row">
                          <div class="col">
                            <label for="exampleInputEmail1">Age</label>

                            <input type="gmail" class="form-control" name="user_age" placeholder="Enter Age" required>
                          </div>
                          <div class="col">
                            <label for="exampleInputEmail1">Password</label>

                            <input type="password" class="form-control" name="user_password" placeholder="Enter password" required>
                          </div>
                        </div>
								


								<div class="form-group mt-4">
									<button type="submit" name='submit' class="btn btn-primary btn-block">
										Sign Up
									</button>
								</div>
								<div class="mt-4 text-center">
									Already have an account? <a href="login.php">Login</a>
								</div>
							</form>
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</section>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src="js/my-login.js"></script>
</body>
</html>