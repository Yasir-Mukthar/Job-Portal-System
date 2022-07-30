<?php


//extra file not used
 session_start();
 

 
 include "dbconnect.php";
 
 if(isset($_POST['submit']) || isset($_POST['search'])){
    $search=$_POST['search'];

     
     $sql_select="SELECT * FROM `jobs` where job_id like '%$search%' or c_name like '%$search%' or job_title like '%$search%'";

     $result_select=mysqli_query($conn, $sql_select);
     $_SESSION['result_select'] = $result_select;
     

     header("location: ../jobs.php");

 }

 
 


?>