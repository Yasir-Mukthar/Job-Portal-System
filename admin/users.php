
<?php
session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: login.php");
    exit;}
include("includes/topbar.php");
include("includes/sidebar.php");
include("includes/users_home.php");
include("includes/footer.php");


?>