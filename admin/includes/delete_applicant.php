<?php
 session_start();

 
 include "dbconnect.php";
 $id=$_GET['comp_id'];
 

    

        
        $sql="DELETE FROM `applicant` WHERE app_id={$id}";

        $result=mysqli_query($conn, $sql) or die("Query not successful");

    
 header("location: ../index.php");


 


?>