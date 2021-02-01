<?php require_once('../include/Session.php');?>
<?php require_once('../include/Functions.php');?>
<?php echo AdminAreaAccess(); ?>

<?php 

	include('../dbcon.php');
	$update_record= $_GET['Update'];

	$sql = "select * from eduinfo where id = '$update_record'";
	$result = mysqli_query($conn,$sql);

	while ($data_row = mysqli_fetch_assoc($result)) {
		$update_id = $data_row['id']; 
		$Name = $data_row['institute_name'];
		$Location= $data_row['location'];
		$Contact= $data_row['contact'];
	}

 ?>

<?php include('../header.php') ?>

<?php include('admin.header.php') ?>

<div class="container jumbotron">
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<h2 class="text-center">UPDATE Education DETAIL</h2>
			<form action="Updatefrom.php? update_id=<?php echo $update_id?>" method="post" enctype="multipart/form-data">
				  
				  <div class="form-group">
				   Institute Name:<input type="text" class="form-control" name="institute_name" value="<?php echo $Name;?>" placeholder="Institute name" required>
				  </div>
				  <div class="form-group">
				      Location: <input type="text" class="form-control" name="location" value="<?php echo $Location;?>"  required>
				  </div>
				  <div class="form-group"> 
				  Contact:<input type="text" class="form-control" name="contact" value="<?php echo $Contact;?>" required>
				  </div>

				  <button type="submit" name="submit" class="btn btn-success btn-lg">UPDATE</button>
			</form>
		</div>
	</div>
</div>

<?php include('../footer.php') ?>


