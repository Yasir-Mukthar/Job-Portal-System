<?php
 session_start();

 
 include "dbconnect.php";
 $id=$_GET['job_id'];
 

    

        
        $sql="DELETE FROM `jobs` WHERE job_id={$id}";

        $result=mysqli_query($conn, $sql) or die("Query not successful");

    
 header("location: ../jobs.php");


 


?>