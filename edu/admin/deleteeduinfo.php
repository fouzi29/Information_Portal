<?php 

function Redirect_to($new_location) {
	header("Location:".$new_location);
	exit;
}
 ?>
<?php 

session_start();

function AdminAreaAccess() {
	if (!isset($_SESSION['uid'])) {
	
		header('location: ../login.php');
}
}


function ErrorMessage() {

if (isset($_SESSION['ErrorMessage'])) {

	$Output = "<div class=\"alert alert-danger\">";
	$Output.= htmlentities($_SESSION['ErrorMessage']);
	$Output.="</div>";
	$_SESSION['ErrorMessage'] = null;
	return 	$Output;
	
}
}

function SuccessMessage() {

if (isset($_SESSION['SuccessMessage'])) {

	$Output = "<div class=\"alert alert-success\">";
	$Output.= htmlentities($_SESSION['SuccessMessage']);
	$Output.="</div>";
	$_SESSION['SuccessMessage'] = null;
	return 	$Output;
}
}

 ?>
<?php echo AdminAreaAccess(); ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Information Portal of Bangladesh</title>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
        <link href="style.css" rel="stylesheet">
        <!--[if lt IE 9]>
        <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
     <style >
     	body{
  background: #AAFFA9;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #11FFBD, #AAFFA9);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #11FFBD, #AAFFA9); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */


  }
tr{
  background-color: #212F3C;
  color: #E53935;
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
   border: 2px solid #dddddd;
}
   th{
  background-color:#FFB74D;
  color: #0b132b;
 }     
  	#foot0{
  width: 1200px;
   font-size: 18px;
   color:white;
   height: 52px;
   width: 1550px;
 /*
 background: linear-gradient(#22194F,#64E986,#64E986,#22194F);
 */

background: linear-gradient(#0b132b,#0b132b,#0b132b);

  text-align: center;
  padding-top: 10px;
  margin-top:3px;
  margin-left:0px;
   position: fixed;
   left: 0;
   bottom: 0;
   
}
</style>
    <body>    
<div class="header-section " style="height: 100px; background-color:#1f4037; color: white;">
	<div class="container">
		<div class="row" >
			<div class="col-md-12" >
				<h2 class="text-center">
					<span><a href="../AdminIndex.php" class="btn btn-success" style="float: left; background-color: black;">BACK TO DASHBOARD</a><span>
				   <h2 class="text-align: center;">DELETE EDUCATION INFORMATION</h2>
					<span><a href="logout.php" class="btn" style="float: right; margin-top: -40px; background-color:yellow; color: red;">LOGOUT</a><span>
				</h2>	
			</div>
		</div>
	</div>
</div>
<div class="container">
	<div class="row" style="margin-top: 20px;">
		<div class="col-md-6 col-md-offset-3  ">
			<div  style="text-align: center;margin-bottom: -10px;">
				 <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data" >
                <input type="text" name="location" placeholder="Enter The Location Name" style="width: 240px;height: 35px; ">
               
                  <input type="submit" name="search" value="Search" class="btn btn-success text-center" style="margin-left: 30px;" >  
                 </form>
			</div>
		</div>
	</div>


<table class="table table-striped table-bordered table-responsive ">
	<h2 class="text-center">Education's Information</h2>
	<tr>
	
		<th class="">Institute Name</th>
		<th class="">Location</th>
		<th class="">Contact</th>
		<th class="">Delete</th>
		
	</tr>
<?php 
	include('../dbcon.php');
	if (isset($_POST['search'])) {

	  $Location = $_POST['location'];

		 $sql = "SELECT * FROM `eduinfo` WHERE  `location`='$Location'";


		$result = mysqli_query($conn,$sql);
		if (mysqli_num_rows($result)>0) {
			while ($DataRows = mysqli_fetch_assoc($result)) {
				
				$Id = $DataRows['id'];
				$Name = $DataRows['institute_name'];
				$Location= $DataRows['location'];
				$Contact = $DataRows['contact'];
				
				?>
				<tr>
					<td><?php echo $Name;?></td>
					<td><?php echo $Location; ?></td>
					<td><?php echo $Contact; ?></td>
					
					<td><a href="deleterecord.php?Delete=<?php echo $Id; ?>" class="btn btn-danger">Delete</a></td>
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

<div>
  <footer>
<div id="foot0" id="row">
<p class="Footer  col-12 col-lg-12">&copy;Copyright 2020 Information potal of bangladesh | Developed By Sumiha</p>
</div>
</footer>
    </div>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>
