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
  background: #0052D4;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #6FB1FC, #4364F7, #0052D4);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #6FB1FC, #4364F7, #0052D4); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

     	}
.lgfrom{

       width:500px;
    text-align: center;
margin-left: -40px;
     	}
     	
     	.login{

     		background: #6FB1FC;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #009FFF, #6FB1FC);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #009FFF, #6FB1FC); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
height: 400px;

     	}

    .form-group
{
	margin-left: 25px;
    width: 500px;
    text-align: center;
    background: transparent;
    border: none;
    border-bottom: 1px solid #fff;
    font-size: 16px;
    font-weight: 200px;
    padding: 10px 0px;
    transition: border 0.5s;
    outline: none;
    color:white; 
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
        
<div class="header-section " style="height: 100px; color: white;">
	<div class="container">
		<div class="row" >
			<div class="col-md-12" >
				<h2 class="text-center">
					<span><a href="../AdminIndex.php" class="btn btn-success" style="float: left; background-color: blue;">BACK TO DASHBOARD</a><span>
					<h2 class="text-center" style="margin-right: 150px;">INSERT TRAIN INFORMATION</h2>
					<span><a href="logout.php" class="btn" style="float: right; margin-top: -40px; background-color:yellow; color: red;">LOGOUT</a><span>
				</h2>	
			</div>
		</div>
	</div>
</div>

<div class="container ">
	<div class="row">
		<div class="col-md-6 col-md-offset-3" style="margin-top: 50px;">
			<div class="login " style="margin-bottom: 70px;" >
			<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data">
				  
				  <div class="form-group">
				    
				   <input type="text" class="form-control" name="train_name" placeholder="Enter Train name" required>
				  </div>
				  <div class="form-group">
				   <input type="text" class="form-control" name="city" placeholder="Enter City Name" required>
				  </div>
				  <div class="form-group">
				  <input type="text" class="form-control" name="off_day" placeholder="Enter Day" required>
				  </div>
				  <div class="form-group">
				   <input type="text" class="form-control" name="src" placeholder="Enter Source Name" required>
				  </div>
				  <div class="form-group">
				   <input type="text" class="form-control" name="time" placeholder="Enter The Time" required>
				  </div>
				  <div class="form-group">
				    <input type="text" class="form-control" name="dst" placeholder="Enter Destination Name" required>
				  </div>

				  <button type="submit" name="submit" class="btn btn-success btn-lg" style="background-color:orange;">ADD INFO</button>
			</form>
		</div>
	</div>
</div>
</div>

<?php 

	if (isset($_POST['submit'])) {
		if (!empty($_POST['train_name']) && !empty($_POST['city'])) {
		
			include ('../dbcon.php');
			
			$train_name=$_POST['train_name'];
			$city=$_POST['city'];
			$off_day=$_POST['off_day'];
			$src=$_POST['src'];
			$time=$_POST['time'];
			$dst=$_POST['dst'];
			

			$sql ="INSERT INTO `traininfo`(  `train_name`, `city`,`off_day`, `src`,`time`,`dst`) VALUES ('$train_name','$city','$off_day','$src','$time','$dst')";

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
					alert("Please insert atleast train_name  and city");
				</script>
				<?php
		}


	}

 ?>



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







