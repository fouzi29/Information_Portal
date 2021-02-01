<?php require_once('../include/Session.php');?>
<?php require_once('../include/Functions.php');?>
<?php echo AdminAreaAccess(); ?>

<?php include('../header.php') ?>

<?php include('admin.header.php') ?>

<div class="container jumbotron">
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<h2 class="text-center">INSERT BUS INFORMATION</h2>
			<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data">
				  
				  <div class="form-group">
				    
				   Bus Name:<input type="text" class="form-control" name="bus_name" placeholder="Enter Bus name" required>
				  </div>
				  <div class="form-group">
				     City: <input type="text" class="form-control" name="city" placeholder="Enter City Name" required>
				  </div>
				  <div class="form-group">
				     Source: <input type="text" class="form-control" name="src" placeholder="Enter Source Name" required>
				  </div>
				  <div class="form-group">
				     Time: <input type="text" class="form-control" name="time" placeholder="Enter The Time" required>
				  </div>
				  <div class="form-group">
				     Destination: <input type="text" class="form-control" name="dst" placeholder="Enter Destination Name" required>
				  </div>

				   <div class="form-group">
				   Contact: <input type="text" class="form-control" name="contact" placeholder="Enter The Contact"  required/><br /><br />
				  </div>

				  <button type="submit" name="submit" class="btn btn-success btn-lg">INSERT</button>
			</form>
		</div>
	</div>
</div>

<?php include('../footer.php') ?>

<?php 

	if (isset($_POST['submit'])) {
		if (!empty($_POST['bus_name']) && !empty($_POST['city'])) {
		
			include ('../dbcon.php');
			
			$bus_name=$_POST['bus_name'];
			$city=$_POST['city'];
			$src=$_POST['src'];
			$time=$_POST['time'];
			$dst=$_POST['dst'];
			$contact=$_POST['contact'];

			$sql ="INSERT INTO `businfo`(  `bus_name`, `city`, `src`,`time`,`dst`,`contact`) VALUES ('$bus_name','$city','$src','$time','$dst','$contact')";

			$run = mysqli_query($conn,$sql);

			if ($run == true) {
				
				?>
				<script>
					alert("Data Inserted Successfully");
				</script>
				<?php
			} else {
				echo "Error : ".$sql."<br>". mysqli_error($conn); 
			}
		} else {
				?>
				<script>
					alert("Please insert atleast bus_name  and city");
				</script>
				<?php
		}


	}

 ?>








