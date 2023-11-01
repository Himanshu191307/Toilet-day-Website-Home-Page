<?php
ob_start();
include_once('../include/confing.php');
$cname=$_GET['cn'];
?>
 <table width="3450" height="1000" border="1">
  <tr >
    <td bgcolor="#0066FF" style="color:#FFFFFF; font-size:18; font-weight:bold" height="60" valign="top" width="50" align="center" class="font">Id</td>
   
    
	<td bgcolor="#0066FF" style="color:#FFFFFF; font-size:18; font-weight:bold" height="60"  valign="top" width="200" align="center" class="font">Phone</td>
   
    <td bgcolor="#0066FF" style="color:#FFFFFF; font-size:18; font-weight:bold" height="60"  valign="top" width="200" align="center" class="font">Date</td>
	<td bgcolor="#0066FF" style="color:#FFFFFF; font-size:18; font-weight:bold" height="60"  valign="top" width="200" align="center" class="font">Time</td>
<?php
$i=1;
	 $sql = "select * from tbl_call_me_back ORDER BY id DESC";
	 $res = mysqli_query($conn, $sql) or die();
	 $count = mysqli_num_fields($res);
	 while($row = mysqli_fetch_array($res))
	 {		   
	echo "<tr>";
	echo "<td style='height:20px;'>".$i."</td> ";	
	
	echo "<td style='height:20px;'>".$row['phone']."</td> ";
	
	echo"<td>".$row['date']."</td>";
	echo"<td>".$row['time']."</td>";
	
	echo "</tr>";
	$i++; }
	$contents = strip_tags($contents); 
	$name=date('d-m-y').'_Call_me_back'.'-lists.xls';
	header("Content-type:application/vnd.ms-excel;name='excel'");
	header("Content-Disposition: attachment; filename=$name");
	header("Pragma: no-cache");
	//header("Expires: 0");
	
?>