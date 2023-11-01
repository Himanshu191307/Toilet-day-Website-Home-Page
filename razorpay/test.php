<?php
session_start();
echo $_SESSION['total_amt'];
echo $name=ucwords($_SESSION['name']);
$email=$_SESSION['email'];
$phone=$_SESSION['phone'];
$city=ucwords($_SESSION['city']);
$desc="Cash Donation to PUCC";
$total_amt=$_SESSION['total_amt'];
$receipts=$_SESSION['orderIDs']; 
//echo $_SESSION['name']='test';
//echo $_SESSION['name'];
?>
