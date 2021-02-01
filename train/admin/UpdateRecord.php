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
<?php 

function Redirect_to($new_location) {
	header("Location:".$new_location);
	exit;
}
 ?>
<?php echo AdminAreaAccess(); ?>

<?php 

	include('../dbcon.php');
	$update_record= $_GET['Update'];

	$sql = "select * from traininfo where tid = '$update_record'";
	$result = mysqli_query($conn,$sql);

	while ($data_row = mysqli_fetch_assoc($result)) {
		$update_tid = $data_row['tid']; 
		$Name = $data_row['train_name'];
		$City= $data_row['city'];
		$Off_day= $data_row['off_day'];
        $src= $data_row['src'];
		$Time= $data_row['time'];
		$Destination= $data_row['dst'];
		

	}

 ?>

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
        

<div class="header-section ">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2 class="text-center">
					<span><a href="admindash.php" class="btn btn-success" style="float: left;">BACK TO DASHBOARD</a><span>
					
					<span><a href="logout.php" class="btn btn-success" style="float: right;">LOGOUT</a><span>
				</h2>	
			</div>
		</div>
	</div>
</div>



<div class="container">
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<h2 class="text-center">UPDATE TRAIN DETAIL</h2>
			<form action="Updatefrom.php? update_tid=<?php echo $update_tid?>" method="post" enctype="multipart/form-data">
				  
				  <div class="form-group">
				   Train Name:<input type="text" class="form-control" name="trainname" value="<?php echo $Name;?>" placeholder="train_name" required>
				  </div>
				  <div class="form-group">
				      City: <input type="text" class="form-control" name="city" value="<?php echo $City;?>"  required>
				  </div>
				  <div class="form-group"> 
				  Off day:<input type="text" class="form-control" name="off_day" value="<?php echo $Off_day;?>" required>
				  </div>
				  <div class="form-group"> 
				  Source:<input type="text" class="form-control" name="src" value="<?php echo $src;?>" required>
				  </div>
				  <div class="form-group"> 
				  Time:<input type="text" class="form-control" name="time" value="<?php echo $Time;?>" required>
				  </div>
				  <div class="form-group"> 
				  Destination:<input type="text" class="form-control" name="dst" value="<?php echo $Destination;?>" required>
				  </div>
				  

				  <button type="submit" name="submit" class="btn btn-success btn-lg" style="background-color: orange;">UPDATE</button>
			</form>
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



