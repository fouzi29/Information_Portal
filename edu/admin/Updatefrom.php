<?php require_once('../include/Session.php');?>
<?php require_once('../include/Functions.php');?>
<?php echo AdminAreaAccess(); ?>

<?php 
//This php code block is for editing the data that we got after clicking on update button
   include('../dbcon.php');
	if (isset($_POST['submit'])) 
		 {
		
			include ('../dbcon.php');
			$id = $_GET['update_id'];
			$Name=$_POST['institute_name'];
			$Location=$_POST['location'];
			$Contact=$_POST['contact'];

			$sql= "UPDATE `eduinfo` SET `institute_name`='$Name',`location`='$Location',`contact`='$Contact' WHERE id = '$id'";
        
			$Execute = mysqli_query($conn,$sql);

			if ($Execute) {
				 $_SESSION['SuccessMessage'] = " Data Updated Successfully";
                Redirect_to("updateeduinfo.php");
				
			}
else{
	echo "Not Successfully";
}

		

	}

 ?>
