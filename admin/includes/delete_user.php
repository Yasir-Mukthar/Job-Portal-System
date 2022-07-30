<?php
 session_start();

 
 include "dbconnect.php";
 $id=$_GET['user_id'];
 

    

        
        $sql="DELETE FROM `users` WHERE user_id={$id}";

        $result=mysqli_query($conn, $sql) or die("Query not successful");

    
 header("location: ../users.php");


 


?>