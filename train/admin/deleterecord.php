<?php 

include('../dbcon.php');
$delete_tid = $_GET['Delete'];
$city = $_GET['City'];


$sql = "delete  from `traininfo` where tid= $delete_tid";

$result = mysqli_query($conn,$sql);

if ($result) {
	
	echo '<script>window.open("deletetraininfo.php?deleted=Record deleted successfully","_self")</script>';
}

 ?>