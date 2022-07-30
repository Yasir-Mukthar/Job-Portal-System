<?php
        // Read data from database
        
        include("dbconnect.php");
        $sql_select= "SELECT * FROM `companies` WHERE 1";
        $result_select=mysqli_query($conn, $sql_select) or die("Query not successful");
        $companies=mysqli_num_rows($result_select);

        $sql_select= "SELECT * FROM `jobs` WHERE 1";
        $result_select=mysqli_query($conn, $sql_select) or die("Query not successful");
        $jobs=mysqli_num_rows($result_select);

        $sql_select= "SELECT * FROM `users` WHERE 1";
        $result_select=mysqli_query($conn, $sql_select) or die("Query not successful");
        $users=mysqli_num_rows($result_select);

        $sql_select = "SELECT * FROM `applicant` WHERE 1";
        $result_select=mysqli_query($conn, $sql_select) or die("Query not successful");
        $applicants=mysqli_num_rows($result_select);



      ?>