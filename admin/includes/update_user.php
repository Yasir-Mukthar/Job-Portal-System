<?php
 session_start();

 $user_id=$_POST['user_id'];
 $user_name=$_POST['user_name'];
 $user_contact_no=$_POST['user_contact_no'];
 $user_gamil=$_POST['user_gamil'];
 $user_skill=$_POST['user_skill'];
 $user_address=$_POST['user_address'];
 $user_gender=$_POST['user_gender'];
 $user_age=$_POST['user_age'];
 $user_password=$_POST['user_password'];
 
 include "dbconnect.php";



 if(isset($_POST['submit'])){
     
    $sqli="UPDATE `users` SET `user_name`='$user_name' ,`user_address`='$user_address' ,`user_contact_no`='$user_contact_no',`user_gamil`='$user_gamil' ,`user_skill`='$user_skill'  ,`user_gender`='$user_gender' ,`user_age`='$user_age' ,`user_password`='$user_password'  WHERE `user_id`={$user_id}";
    $result=mysqli_query($conn, $sqli);

}







 
 header("location: ../users.php");


 


?>