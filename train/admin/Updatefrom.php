<?php require_once('../include/Session.php');?>
<?php require_once('../include/Functions.php');?>
<?php echo AdminAreaAccess(); ?>

<?php 
//This php code block is for editing the data that we got after clicking on update button
   include('../dbcon.php');
	if (isset($_POST['submit'])) 
		 {
		
			include ('../dbcon.php');
			$tid = $_GET['update_tid'];

			$Name=$_POST['trainname'];
			
			$City=$_POST['city'];
			$Off_day=$_POST['off_day'];
		    $src=$_POST['src'];
			$Time=$_POST['time'];
			$Destination=$_POST['dst'];

			$sql= "UPDATE `traininfo` SET `train_name`='$Name',`city`='$City',`off_day`='$Off_day',`src`='$src',`time`='$Time',`dst`='$Destination' WHERE tid = '$tid'";
        
			$Execute = mysqli_query($conn,$sql);

			if ($Execute) {
				 $_SESSION['SuccessMessage'] = " Data Updated Successfully";
                Redirect_to("updatetrain.php");
				
			}
else{
	echo "Not Successfully";
}

		

	}

 ?>
