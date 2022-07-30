<?php
 session_start();

 $user_name=$_POST['user_name'];
 $contact_no=$_POST['contact_no'];
 $user_gmail=$_POST['user_gmail'];
 $user_skill=$_POST['user_skill'];
 $user_address=$_POST['user_address'];
 $gender=$_POST['gender'];
 $user_age=$_POST['user_age'];
 $user_password=$_POST['user_password'];
 
 include "dbconnect.php";
 
 if(isset($_POST['submit'])){
     
     $sqli="INSERT INTO `users`(`user_name`, `user_address`, `user_contact_no`, `user_gamil`, `user_skill`, `user_gender`, `user_age`, `user_password`) VALUES ('$user_name','$user_address','$contact_no','$user_gmail','$user_skill','$gender','$user_age','$user_password')";
     $result=mysqli_query($conn, $sqli);

 }
 header("location: ../users.php");


 


?>