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
  background: #AAFFA9;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #11FFBD, #AAFFA9);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #11FFBD, #AAFFA9); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */


     	}
.lgfrom{

        width:500px;
    text-align: center;
margin-left: 20px;
     	}
     	
     	.login{
margin-bottom:-20px;
     		background: #1f4037;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #16A085, #1f4037);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #16A085, #1f4037); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
height: 400px;

     	}

    .form-group
{
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
        
<div class="header-section " style="height: 100px; background-color:#148F77 ; color: white;">
	<div class="container">
		<div class="row" >
			<div class="col-md-12" >
				<h2 class="text-center">
					<span><a href="../AdminIndex.php" class="btn btn-success" style="float: left; background-color: blue;">BACK TO DASHBOARD</a><span>
				<h2 class="text-align: center;">ADD MEDICAL INFORMATION</h2>
					<span><a href="logout.php" class="btn" style="float: right; margin-top: -40px; background-color:yellow; color: red;">LOGOUT</a><span>
				</h2>	
			</div>
		</div>
	</div>
</div>

<div class="container text-center ">
	<div class="row">
		<div class="col-md-6 col-md-offset-3" style="margin-top: 50px;">
			<div class="login " style="margin-bottom: 70px; " >
			
			<form class=" lgfrom text-center" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data">
				  <div class="form-group">
				     <input type="text" class="form-control text-center" name="number" placeholder="Enter List No." >
				  </div>
				  <div class="form-group">
				    
				   <input type="text" class="form-control text-center" name="medicalname" placeholder="Medical name" required>
				  </div>
				  <div class="form-group">
				      <input type="text" class="form-control text-center" name="city" placeholder="Enter City Name" required>
				  </div>
				  <div class="form-group">
				    
				 <input type="text" class="form-control text-center " name="pphone" placeholder="Enter Medical Helpline Number" required>
				  </div>
				  

				   <div class="form-group">
				    
				   <input type="file" class="form-control text-center" name="simg" required>
				  </div>

				  <button type="submit" name="submit" class="btn " style="background-color: yellow; ">ADD INFO</button>
			</form>
		</div>
	</div>
</div>

</div>

<?php 

	if (isset($_POST['submit'])) {
		if (!empty($_POST['number']) && !empty($_POST['medicalname'])) {
		
			include ('../dbcon.php');
			$number=$_POST['number'];
			$name=$_POST['medicalname'];
			$city=$_POST['city'];
			$pphone=$_POST['pphone'];
			include('ImageUpload.php');

			$sql ="INSERT INTO `medicalinfo`( `number`, `name`, `city`, `pcontact`, `image`) VALUES ('$number','$name','$city','$pphone','$imgName')";

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
					alert("Please insert atleast number and medicalname");
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








