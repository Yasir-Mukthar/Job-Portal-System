<?php
session_start();
if (isset($_SESSION['loggedin'])) {
  header("location: index.php");
}
$login = false;
$showError = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  include 'includes/dbconnect.php';
  $username = $_POST["admin_name"];
  $password = $_POST["admin_password"];


  $sql = "Select * from admin where admin_name='$username' AND admin_password='$password'";
  $result = mysqli_query($conn, $sql);
  $num = mysqli_num_rows($result);
  $rows = mysqli_fetch_assoc($result);
  if ($num == 1) {
    $login = true;
    session_start();
    $_SESSION['loggedin'] = true;
    $_SESSION['admin_name'] = $username;
    $_SESSION['admin_password'] = $password;
    $_SESSION['admin_img'] = $rows['admin_img'];
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
    <title>Login</title>
    <link rel="stylesheet" href="Login/style.css">
    
</head>
<body>

   




    <div class="container">



        <div class="div2">


               <div class="login">
<form method="POST" action="login.php">
<h1 style="color:blue; margin:0px auto;">Login</h1>
<br><br><br>
                

                <input type="text" placeholder="Enter Name" required name="admin_name">
                <input type="password" placeholder="Enter Password" required name="admin_password">
                <input type="submit" value="Login" name="submit">
                <?php

if ($showError) {
  echo ' <div style=" color:red;">
      <strong>Error! ' . $showError . '</strong> 
      
  </div> ';
}
?>
                
                
              
            </form>

               </div>


        </div>
    </div>
    
</body>
</html>