<?php 

include('../dbcon.php');
$delete_id = $_GET['Delete'];
$Picture = $_GET['Picture'];


$sql = "delete  from `medicalinfo` where id = $delete_id";

$result = mysqli_query($conn,$sql);

if ($result) {
	unlink("../databaseimg/".$Picture);
	echo '<script>window.open("deletemedicalinfo.php?deleted=Record deleted successfully","_self")</script>';
}

 ?>