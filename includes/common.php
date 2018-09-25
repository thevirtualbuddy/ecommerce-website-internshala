<?php
    $con = mysqli_connect("localhost", "root", "", "estore")
    or die(mysqli_error($con));
    if(!isset($_SESSION)){
      session_start();
    }
?>
