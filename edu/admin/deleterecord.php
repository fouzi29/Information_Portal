<?php 

include('../dbcon.php');
$delete_id = $_GET['Delete'];
$location = $_GET['Location'];


$sql = "delete  from `eduinfo` where id= $delete_id";


$result = mysqli_query($conn,$sql);

if ($result) {
	
	echo '<script>window.open("deleteeduinfo.php?deleted=Record deleted successfully","_self")</script>';
}

 ?>