<?php
    session_start();
    unset($_SESSION["user_name"]);
    unset($_SESSION["user_password"]);
    session_destroy();
    header("Location: login.php");
?>