<?php require_once('../include/Session.php');?>
<?php require_once('../include/Functions.php');?>
<?php echo AdminAreaAccess(); ?>

<?php include('../header.php') ?>

<div class="header-section jumbotron">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2 class="text-center">
					WELCOME TO ADMIN DASHBOARD
					<span><a href="logout.php" class="btn btn-success" style="float: right;">LOGOUT</a><span>
				</h2>	
			</div>
		</div>
	</div>
</div>

<div class="admin-dashboard text-center">
        <div class="container">
        	
            <div>
                <div class="row">
                    <div class="col-md-6 col-md-offset-3 jumbotron" >
                        <a href="addmedicalinfo.php" class="btn btn-info btn-lg">INSERT MEDICAL INFORMATION </a><br><br>
                        
                        <a href="updatemedical.php" class="btn btn-info btn-lg">UPDATE MEDICAL INFORMATION </a><br><br>
                        <a href="deletemedicalinfo.php" class="btn btn-info btn-lg">DELETE MEDICAL INFORMATION </a><br><br>
                        <a href=".../insert_tourist_spot.php" class="btn btn-info btn-lg">INSERT TOURIST INFORMATION </a><br><b> <a href="addbusinfo.php" class="btn btn-info btn-lg">INSERT BUS INFORMATION </a><br><br> 
                        <a href="addeduinfo.php" class="btn btn-info btn-lg">INSERT EDUCATION INFORMATION </a><br><br> 
                    </div>
                </div>
            </div>
        </div>
</div>

<?php include('../footer.php') ?>
