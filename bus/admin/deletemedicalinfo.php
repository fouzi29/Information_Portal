<?php require_once('../include/Session.php');?>
<?php require_once('../include/Functions.php');?>
<?php echo AdminAreaAccess(); ?>

<?php include('../header.php') ?>
<?php include('admin.header.php') ?>


<div class="container">
	<div class="row">
		<div class="col-md-6 col-md-offset-3  jumbotron ">
			<div  style="text-align: center;">
				 <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data" >
                <input type="text" name="city" placeholder="Enter The City Name" style="width: 240px;height: 35px;">
               
                  <input type="submit" name="search" value="Search" class="btn btn-success text-center" style="margin-left: 30px;" >  
                 </form>
			</div>
		</div>
	</div>


<table class="table table-striped table-bordered table-responsive text-center">
	<h2 class="text-center">Medical's Information</h2>
	<tr>
	
		<th class="text-center">Number</th>
		<th class="text-center">Medical Name</th>
		<th class="text-center">City</th>
		<th class="text-center">Medical Helpline Number</th>
		<th class="text-center">Picture</th>
		<th class="text-center">Delete</th>
		
	</tr>
<?php 
	include('../dbcon.php');
	if (isset($_POST['search'])) {

	  $City = $_POST['city'];

		 $sql = "SELECT * FROM `medicalinfo` WHERE  `city`='$City'";


		$result = mysqli_query($conn,$sql);
		if (mysqli_num_rows($result)>0) {
			while ($DataRows = mysqli_fetch_assoc($result)) {
				$Id = $DataRows['id'];
				$Number = $DataRows['number'];
				$Name = $DataRows['name'];
				$City = $DataRows['city'];
				$Pcontact = $DataRows['pcontact'];
				$Picture  = $DataRows['image'];
				?>
				<tr>
					<td><?php echo $Number;?></td>
					<td><?php echo $Name; ?></td>
					<td><?php echo $City; ?></td>
					<td><?php echo $Pcontact; ?></td>
					<td><img src="../databaseimg/<?php echo $Picture ;?>" alt="img"></td>
					<td><a href="deleterecord.php?Delete=<?php echo $Id; ?>&Picture=<?php echo $Picture ;?>" class="btn btn-danger">Delete</a></td>
				</tr>
				<?php
				
			}
			
		} else {
			echo "<tr><td colspan ='6' class='text-center'>No Record Found</td></tr>";
		}
	}

 ?>
	

</table>
</div>

<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<h2><?php echo @$_GET['deleted']; ?></h2>
			</div>
		</div>
	</div>	



<?php include('../footer.php') ?>