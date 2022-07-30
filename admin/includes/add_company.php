<?php
 session_start();

    $comp_name=$_POST['comp_name'];
    $comp_address=$_POST['comp_address'];
    $comp_contact_no=$_POST['comp_contact_no'];
    include "dbconnect.php";
    
    if(isset($_POST['submit'])){
        
        $sqli="INSERT INTO `companies`(`comp_name`,`comp_address`,`comp_contact_no`) VALUES ('{$comp_name}','{$comp_address}','{$comp_contact_no}')";
        $result=mysqli_query($conn, $sqli);

    }
    header("location: ../companies.php");


 


?>