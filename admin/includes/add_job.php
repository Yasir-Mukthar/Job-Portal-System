<?php
 session_start();

 $comp_name=$_POST['comp_name'];
 $comp_id=$_POST['comp_id'];
 $job_title=$_POST['job_title'];
 $job_salary=$_POST['job_salary'];
 $job_location=$_POST['comp_address'];
 $job_experience=$_POST['job_experience'];
 $job_description=$_POST['job_description'];
 $job_type=$_POST['job_type'];
 $job_date=$_POST['job_date'];
 
 include "dbconnect.php";
 
 if(isset($_POST['submit'])){
     
     $sqli="INSERT INTO `jobs`(`c_name`,`job_title`, `job_salary`,`job_location`,`job_experience`, `job_description`, `job_type` , `comp_id` , `job_date`) VALUES ('{$comp_name}','{$job_title}','{$job_salary}' ,'{$job_location}' ,'{$job_experience}' ,'{$job_description}' ,'{$job_type}','{$comp_id}' ,'{$job_date}')";
     $result=mysqli_query($conn, $sqli);

 }
 header("location: ../jobs.php");


 


?>