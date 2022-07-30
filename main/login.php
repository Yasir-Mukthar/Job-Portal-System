<?php
session_start();
if (isset($_SESSION['login'])) {
  header("location: index.php");
}
$login = false;
$showError = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  include 'dbconnect.php';
  $username = $_POST["user_gmail"];
  $password = $_POST["user_password"];


  $sql = "Select * from users where user_gamil='$username' AND user_password='$password'";
  $result = mysqli_query($conn, $sql);
  $num = mysqli_num_rows($result);
  $rows = mysqli_fetch_assoc($result);
  if ($num == 1) {
    $login = true;
    session_start();
    $_SESSION['login'] = true;
    $_SESSION['user_name'] = $username;
    $_SESSION['user_password'] = $password;
    $_SESSION['user_id'] = $rows['user_id'];
    header("location: index.php");
  } else {

    $showError = "Invalid Detail";
  }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login or Signup</title>
    <link rel="stylesheet" href="login/style.css">
    
</head>
<body>

   




    <div class="container">


        <div class="div1">
<div class="heading" style="font-size: 50px ; color: blue; font-weight: 900;">Job Portal</div>
            <p>Choose a job you love, and you will never have to work a day in your life</p>

        </div>


        <div class="div2">


               <div class="login">
<form method="POST" action="login.php">
<h1 style="color:blue; margin:0px auto;">Login</h1>
<br>

                <input type="email" placeholder="Enter Gmail" required name="user_gmail">
                <input type="password" placeholder="Enter Password" required name="user_password">
                <input type="submit" value="Log In" name="submit">
                <?php

if ($showError) {
  echo ' <div style=" color:red;">
      <strong>Error! ' . $showError . '</strong> 
      
  </div> ';
}
?>
                <br><br>
                <hr>
               <p>Don't have an account? <a href="signup.php"><strong>Sign Up</strong></a>
</p>
            </form>

               </div>


        </div>
    </div>
    
</body>
</html>