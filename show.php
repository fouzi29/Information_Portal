<!DOCTYPE html>

<?php
include("connection.php");
error_reporting(0) ;

$stmt = $db->prepare('SELECT tspic,tsid,spotname,location,contact,description FROM tourist WHERE tsid = :tsid');
$stmt->execute(array(':tsid' => $_GET['id']));
$row = $stmt->fetch();

//if post does not exists redirect user.
if($row['tsid'] == ''){
    header('Location: ./');
    exit;
}
?>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><?php echo $row['c_title'];?>-Bangladesh</title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

  <link rel="stylesheet" href="BOOTSTRAP/css/style.css.">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="shortcut icon" href=".img/m.png">

   <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">


 <style>
 
 

  body{
  background: #1FA2FF;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #A6FFCB, #12D8FA, #1FA2FF);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #A6FFCB, #12D8FA, #1FA2FF); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

        }
    

.body-wrap{
   color: red;
   background-color: #006400;
   border-bottom: solid 2px red;
   height: 50px;
  
}
.body-wrap h4{
  background-color:orange;
  height:40px;
  width:130px;
  margin-bottom:-40px;  
}

.body-wrap2{
  color: orange;
  height: 40px;
  width: 1066px;
  margin-left: 130px;
  margin-top:-40px;

}

.mydiv{
background: linear-gradient(#009688, #009688, #40CBEA,#40CBEA,#009688  ,#009688);
height:90px;
box-sizing:border-box;
border-radius: 4px;
box-shadow: 0 2px 5px black;

}
.mydiv img{
  margin-top:0px;
}
.mydivh2{
  margin-left: 105px;
   color: black;
   margin-top: -65px;
}

.my-navbar{
background-color:#00cc66;
}
.navbar-toggler{
  background-color: black;
  color: white;
}
.nav-item .nav-link{

    color:white;
    font-size:13px;
    font-family:arial;
    letter-spacing:1px;
    
    text-transform: uppercase;
}
.mydiv2 ul li:hover{
 background-color:#00768E;
 } 
 .nav-link:hover{
  color:red;
} 
.mega-menu{
     background-color: transparent;
}
.dropdown:hover .dropdown-menu{
    display: block;
}

.dropdown-menu{
    border:none;
}

.dropdown-item{
    padding: 12px 40px 12px 20px;
    font-size: 15px;
    font-family:arial;
    color:black;
    font-weight: lighter;
    background-color: blue;
    transform-origin: center;
    animation :rotate 1.5s ease 1;
}
@keyframes rotate{
    0%{transform: perspective(600px) rotatey(90deg); transform-origin:center;}
    100%{transform: perspective(600px) rotatey(0deg); transform-origin:center;}
}

.dropdown-item:nth-of-type(1){
    animation-delay: 0s;
}
.dropdown-item:nth-of-type(2){
    animation-delay: 0.1s;
}
.dropdown-item:nth-of-type(3){
    animation-delay: 0.2s;
}
.dropdown-item:nth-of-type(4){
    animation-delay: 0.3s;
}
.dropdown-item:nth-of-type(5){
    animation-delay: 0.4s;
}
.dropdown-item:nth-of-type(6){
    animation-delay: 0.5s;
}

.dropdown-item:hover{
    background-color: #0652dd;
    color:white;
}
h2{
  color:black;
}
.section{
  background-color: #151B54;
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




</head>
<body >


    <div id="hbody">

    <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 " style="height: 100px; background-color:; ">
                            <h2 style="text-align: center; margin-left: 80px; color:#642b73; font-size: 36px;">
                              SPOT DETAILS
                            <div class="hmbt" style="margin-right: 90px; margin-top: -25px;"><span style="float: right;"><a href="tspot.php" class="btn btn-info btn-lg" style="background-color: orange;">Back</a></span></div>
                            </h2>
                    </div>
                </div>
            </div>

 <section class="section">
  <div class="row">
     <div class="col-12 col-lg-12 col-md-9 col-sm-12" style="margin-bottom:20px;color:white">
   <p class="p1" style="margin-bottom:60px">
<?php
            echo '<div>';
                echo '<h2 style="text-align: center;">'.$row['spotname'].'</h2>';
                echo '<h3 style="text-align: center;" >'.$row['location'].'</h3>';
                echo '<h3 style="text-align: center;" >'.$row['contact'].'</h3>';
                echo '<p>'.$row['description'].'</p>';    

            echo '</div>';
        ?>
   </p>
 
  </div>
 </div>
 <footer>
  <div id="foot0" id="row">
<p class="Footer col-12 col-lg-12 ">&copy;Copyright 2020 Information potal of bangladesh | Developed By Sumiha</p>
</div>
</footer>
 </section>

 </div>

</div>


<script src="js/jquery-3.3.1.slim.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>


    <script type="text/javascript" src="js/jquery-1.9.0.min.js"></script>


</body>
</html>