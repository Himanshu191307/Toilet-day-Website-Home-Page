<?php
 include('include/confing.php');
 session_start();
 $id=$_SESSION['admin_id'];
 session_unset($id);
 session_destroy();
 header("location:index.php?logout=success");

?>