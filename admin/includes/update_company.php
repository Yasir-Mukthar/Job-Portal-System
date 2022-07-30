<?php
 session_start();

 $comp_id=$_POST['comp_id'];
 $comp_name=$_POST['comp_name'];
 $comp_address=$_POST['comp_address'];
 $comp_contact_no=$_POST['comp_contact_no'];
 include "dbconnect.php";
 
 if(isset($_POST['submit'])){
     
     $sqli="UPDATE `companies` SET `comp_name`='$comp_name',`comp_address`='$comp_address',`comp_contact_no`='$comp_contact_no' WHERE `comp_id`={$comp_id}";
     $result=mysqli_query($conn, $sqli);

 }
 header("location: ../companies.php");


 


?>