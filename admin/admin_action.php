<?php
 session_start();
 include('include/confing.php');
 $username=$_POST['username'];
 $password=$_POST['password'];
 if(isset($_POST['admin-login'])){
 	if($_POST['username']=="" || $_POST['password']==""){
 		//header("location:index.php?er=101");
		echo"<script>
    window.location = 'index.php?er=101';
</script>";
 	}
 	else{
 		$sql="SELECT * FROM administrator WHERE username='".$username."' && password='".$password."'";
 		$run=mysqli_query($conn,$sql);
 		$count=mysqli_num_rows($run);
 		if($count > 0){
 			$_SESSION['admin_id']=$username;
 			//header("location:dashboard.php");
			echo"<script>
    window.location = 'dashboard.php';
</script>";
 		}
 		
 	}
 }
die();
?>