<?php
session_start();
include("dbconnect.php");

if(isset($_POST['submit'])){

    $file=$_FILES['file'];
    $user_id=$_POST['user_id'];
    $id=$_POST['id'];
    $user_gmail=$_POST['user_gmail'];
    $filename=$_FILES['file']['name'];
    $filetype=$_FILES['file']['type'];
    $filesize=$_FILES['file']['size'];
    $filetemp=$_FILES['file']['tmp_name'];


    $file_name=explode('.',$filename);
    $file_extension=strtolower($file_name[1]);
    
            if($file_extension=='pdf'){
                        $images='upload/'.$filename;
                        if(move_uploaded_file($filetemp,$images)){

                            
                            $sqli="INSERT INTO `applicant`(`job_id`, `user_gmail`, `pdf`,`user_id`) VALUES ('$id','$user_gmail','$images','$user_id')";
                                        $result=mysqli_query($conn, $sqli);

                                        header("location: index.php");

                                        

                            

                        } else{
                            echo "<h1>Pleae select file or enter gmail</h1>";
                        }

            } else {
                echo "<h1>Pleae Upload <strong> pdf </strong> file.</h1>";

            }
}






?>



