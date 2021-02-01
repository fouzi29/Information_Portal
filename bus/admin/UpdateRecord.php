<?php require_once('../include/Session.php');?>
<?php require_once('../include/Functions.php');?>
<?php echo AdminAreaAccess(); ?>

<?php 

	include('../dbcon.php');
	$update_record= $_GET['Update'];
	$sql = "select * from medicalinfo where id = '$update_record'";
	$result = mysqli_query($conn,$sql);

	while ($data_row = mysqli_fetch_assoc($result)) {
		$update_id = $data_row['id']; 
		$Number = $data_row['number'];
		$Name = $data_row['name'];
		$City = $data_row['city'];
		$Pcontact = $data_row['pcontact'];
		

	}

 ?>

<?php include('../header.php') ?>

<?php include('admin.header.php') ?>

<div class="container jumbotron">
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<h2 class="text-center">UPDATE MEDICAL DETAIL</h2>
			<form action="UpdateRecord.php?update_id=<?php echo $update_id;?>" method="post" enctype="multipart/form-data">
				  <div class="form-group">
				       List No.:<input type="text" class="form-control" name="number" value="<?php echo 
				      $Number;?>" >
				  </div>
				  <div class="form-group">
				    
				    Medical Name:<input type="text" class="form-control" name="medicalname" value="<?php echo 
				    $Name;?>" placeholder="medicalname" required>
				  </div>
				  <div class="form-group">
				      City: <input type="text" class="form-control" name="city" value="<?php echo $City;?>"  required>
				  </div>
				  <div class="form-group">
				    
				   Medical Helpline Number:<input type="text" class="form-control" name="pphone" value="<?php echo $Pcontact;?>" required>
				  </div>
				  

				  <button type="submit" name="submit" class="btn btn-success btn-lg">UPDATE</button>
			</form>
		</div>
	</div>
</div>

<?php include('../footer.php') ?>


<?php 
//This php code block is for editing the data that we got after clicking on update button
	if (isset($_POST['submit'])) {
		if (!empty($_POST['number']) && !empty($_POST['medicalname'])) {
		
			include ('../dbcon.php');
			$id = $_GET['update_id'];
			$number=$_POST['number'];
			$name=$_POST['medicalname'];
			$city=$_POST['city'];
			$pphone=$_POST['pphone'];
			

			$sql = "UPDATE medicalinfo SET number= '$number', name = '$name', city='$city', pcontact = '$pphone' WHERE id = '$id'";

			$Execute = mysqli_query($conn,$sql);

			if ($Execute) {
				 $_SESSION['SuccessMessage'] = " Data Updated Successfully";
                Redirect_to("updatemedical.php");

			}


		}

	}

 ?>
