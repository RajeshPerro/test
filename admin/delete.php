<?php
include('dbcon.php');

$dlt_Id=$_GET['dr_id'];
//$Page_Link=$_POST['page'];

// $dlt_Id;
$sql=mysql_query("DELETE FROM add_doctor WHERE dr_id='$dlt_Id'") or die(mysql_error());



echo ("<script>window.alert('Deleted!!');</script>");
	echo ("<script>window.location='admin.php';</script>");
?>