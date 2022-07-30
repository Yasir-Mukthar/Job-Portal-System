<?php
 session_start();
 $job_id=$_POST['job_id'];

 $comp_name=$_POST['comp_name'];
 $job_title=$_POST['job_title'];
 $job_salary=$_POST['job_salary'];
 $job_location=$_POST['comp_address'];
 $job_experience=$_POST['job_experience'];
 $job_description=$_POST['job_description'];
 $job_type=$_POST['job_type'];
 include "dbconnect.php";
 
 if(isset($_POST['submit'])){
     
     $sqli="UPDATE `jobs` SET `c_name`='$comp_name',`job_title`='$job_title',`job_salary`='$job_salary' ,`job_location`='$job_location' ,`job_experience`='$job_experience' ,`job_description`='$job_description' ,`job_type`='$job_type'  WHERE `job_id`={$job_id}";
     $result=mysqli_query($conn, $sqli);

 }
 header("location: ../jobs.php");


 
 

?>