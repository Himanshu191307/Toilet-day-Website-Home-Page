<?php
 include('include/confing.php');
 session_start();
 $session_id=$_SESSION['admin_id'];
 if(!isset($_SESSION['admin_id'])){
    header("location:index.php");
 }

?>