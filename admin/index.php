
<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
  header("location: login.php");
  exit;

}

include("includes/topbar.php");
include("includes/sidebar.php");

      
if (isset($_POST['companies'])){
 include 'companies.php';
 // header('Location: login.php');
}


else if (isset($_POST['users'])){

//require 'admin.php';
header('Location: admin.php');
//  if($name=="admin" && $psw==1234 ){
//  include 'screate.php';
// }
 


  // echo  "hello admin";
 }
 else{
  include("includes/home.php");
 }
 

//include("includes/home.php");
include("includes/footer.php");


?>