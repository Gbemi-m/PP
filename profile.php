<?php 

session_start();
 $email = $_SESSION['email'];

 echo $email . "<br> <a href='logout.php'>Logout</a>";

 if (!$_SESSION['email']) {
    header('location: login.php');
 }





?>