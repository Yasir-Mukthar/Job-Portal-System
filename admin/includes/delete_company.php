<?php
 session_start();

 
 include "dbconnect.php";
 $id=$_GET['comp_id'];
 

    

        
        $sql="DELETE FROM `companies` WHERE comp_id={$id}";

        $result=mysqli_query($conn, $sql) or die("Query not successful");

    
 header("location: ../companies.php");


 


?>