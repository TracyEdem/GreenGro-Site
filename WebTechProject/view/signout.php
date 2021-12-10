<?php
session_start();
//Destroy session
session_destroy();
// redirect to login page
header("location:signin.php"); 
        exit;
?>