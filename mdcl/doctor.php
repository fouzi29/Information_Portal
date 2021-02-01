 <?php
session_start() ;
include("dbcon.php");
error_reporting(0) ; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>HOMEPAGE</title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

  <link rel="stylesheet" href="BOOTSTRAP/css/style.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="shortcut icon" href=".img/m.png">



<style>

body{
 /*background-color: #b2505c;
 background-image: linear-gradient(315deg,#4c131a  0%, #4c131a 74%);*/
  /*  background:url(img/5I0fQLp.jpg);*/
background: linear-gradient(#009688, #009688, #40CBEA,#40CBEA,#009688  ,#009688);




   /* Full height */

  height: 100%; 

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

#hbody{
 width: 1200px ;
 margin:0 auto;
/*background-color: #b2505c;
 background-image: linear-gradient(315deg, #4c131a 0%, #4c131a 74%);*/
 background:transparent;
  box-sizing:border-box;
  border-radius: 4px;
  box-shadow: 0 2px 5px black;
 
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
font-variant: small-caps;
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


  #wrapper{
    margin-top:25px;
    height: 480px;
  }
section{
background: linear-gradient(#009688, #009688,#009688  ,#009688);s
}
.row{
background-color: yellow;
margin-top: 24px;
width: 1200px;
margin-left:0px;

}
 .recent-post-widget>ul{
  list-style: none;
  padding-left: 0;
}
.recent-post-widget ul li{
  border-bottom: 1px dashed #000;
  padding: 5px;
}
.recent-post-widget ul li a{
  color: green;
}

.link>figure>a{
  color: red;
  padding-left: 10px;
}
#doctorlist{
  height: 500px;
  background-color:#86A8E7;

  margin-top: 0px;
}
#doctorlist h2{
 background: linear-gradient(#009688, #009688, #40CBEA,#40CBEA,#009688  ,#009688);
background-image: linear-gradient(19deg, #FAACA8 0%, #DDD6F3 100%);

}
#doctorlist ul {
  list-style-type: none;

}
#doctorlist ul li{
  padding-top: 7px;


}
#links{
  color: black;
  height: 336px;
  background: linear-gradient(#009688, #009688, #009688  ,#009688);
  border-top: 2px solid #FF241D;
}
#links ul{

  list-style-type: none;
}
#links ul li a{
  text-decoration: none;
  color: white ;
  display: block;
  padding: 10px;
 z-index: 555;

}
#links ul li :hover{
   cursor: pointer;
   background-color: red;
   transition: all 2s;

}
table {
  background: linear-gradient(#009688, #009688, #40CBEA,#40CBEA,#009688  ,#009688);
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
#about{
font-size: 18px;
   color:#black;
   height: 100px;

  
  padding-top: 10px;
  margin-top:3px;
  margin-left:0px;
  background: linear-gradient(#009688, #009688, #009688  ,#009688);
margin-top: 0px;
border-bottom: 2px solid red;
border-top: 2px solid red;


}
#foot0{
  font-size: 18px;
   color:#0000A0;
   height: 52px;
background-color: #64E986;

  text-align: center;
  padding-top: 10px;
  margin-top:3px;
  margin-left:0px;
  
 }

</style>

</head>
<body >


<div id="hbody">
 
  <header>
     <div class="container-fluid p-0">
   <div class="mydiv">
        <div class="col-12 col-lg-8 col-md-9 col-sm-12" style="color:black">
          <img src="img/IPB.png" style="border-radius: 100%" height="90" alt="IPB logo" >  
          <div class="mydivh2"><h2>Information Portal Of Bangladesh</h2></div>
        </div>
      </div>
  
      <div class="mydiv2">
      <nav class="navbar navbar-expand-lg my-navbar nav">
        <a class="navbar-brand" href="#"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa fa-bars" aria-hidden="true"></i>
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Education Information
        </a>
              <ul class="dropdown-menu mega-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Admission Information</a>
                <a class="dropdown-item" href="#">Academic Information</a>
                <a class="dropdown-item" href="#">Notice</a>
              </ul>
            </li>
              <li class="nav-item"><a class="nav-link" href="../tspot.php">Tourist Spot</a></li>
              <li class="nav-item">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Medical information</a>
                <ul class="dropdown-menu mega-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="mdclhm.php">Medical Details</a>
                <a class="dropdown-item" href="doctor.php">Doctor Details</a>
              </ul>
              </li>
              <li class="nav-item"><a class="nav-link" href="#">Transport & commuinacation</a></li> 
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">contact us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#about">About us</a>
              </li>
        </ul>
        </div>
      </nav>
       
   </div>
      </div>
    </header>
 <br>

<section> 
     <div id="doctorlist">
      <h2>List Of all doctor with details</h2>
      <form id="rgfrom" action="" method="POST">
     <input style="padding: 5px; margin: 8px; height: 30px; width: 250px;" type="text" name="std" placeholder="enter doctor or diagnostic center name" />
     <input style="padding: 5px; margin-left: 8px; height: 30px;" type="submit" value="Search" name="submit"/></a> 
</form>
       <?php
      $query = "SELECT * FROM doctor ";
      $results = mysqli_query($conn, $query);
      $r= mysqli_num_rows($results) ;
      echo "Total number of doctor: $r";
      session_start();
      if(isset($_POST['std'])) 
        {
          $nm=$_POST['std'];
      $query = "SELECT * FROM doctor WHERE doctorn like '%$nm%' or diagn like '%$nm%'";
      $results = mysqli_query($conn, $query);
      $r1= mysqli_num_rows($results) ;
      echo "Total number of doctor found:$r1";

      if ($r1>=1) {
  ?>
<div class="table"> 
 <table>
  <tr>
    <th>DOCTOR NAME</th>
    <th>CITY</th>
    <th>DIAGNOSTIC CENTER NAME</th>
    <th>TIME</th> 
    <th>DAY</th>
    <th>CONTACT</th>
  </tr>
  <?php
   while($row= mysqli_fetch_array($results)) {

echo "<tr><td>" . $row["doctorn"]. "</td><td>" .$row["city"]."</td><td>". $row["diagn"] . "</td><td>"
. $row["time"]. "</td><td>". $row["day"]. "</td><td>".$row["contact"]."</td></tr>"  ;


}
echo "</table>";
?>
</table>
     </div>
     <?php        
    }else {
      echo "error please write correct spelling" ;
    }

    }
   else{
    ?>
    <table>
  <tr>
    <th>DOCTOR NAME</th>
    <th>CITY</th>
    <th>DIAGNOSTIC CENTER NAME</th>
     
    <th>TIME</th> 
    <th>DAY</th>
    <th>CONTACT</th>
  </tr>
  <?php
   while($row= mysqli_fetch_array($results)) {

echo "<tr><td>" . $row["doctorn"] ."</td><td>".$row["city"]."</td><td>" . $row["diagn"] . "</td><td>"
. $row["time"]. "</td><td>". $row["day"]. "</td><td>".$row["contact"]."</td></tr>"  ;
}
echo "</table>";
?>
</table>
<?php

   }
        
   ?>

</div>
 </section>

     <div id="links" style="color: black"> 
      <h2>Important links</h2>
      <ul>
        <li> <a href="https://erajshahi.portal.gov.bd/" target="blank">Rajshahi city corporation</a> </li>
        <li> <a href="https://www.rmp.gov.bd/" target="blank">Rajshahi Metropoliton police</a> </li>
        <li> <a href="http://vu.edu.bd" target="blank">Varendra university</a> </li>
        <li>  <a href="http://rajshahieducationboard.gov.bd/" target="blank">Rajshahi education Board</a> </li>
        <li> <a href="#" target="blank">Link 5</a> </li>
        <li> <a href="#" target="blank">Link 6</a> </li>
          </ul>
     </div>

<div id="about"> 
  <h2>About us</h2>
   <p>hi its al about city information website .this gonna help every people for finding doctor,educational information,restaurent ,atm location</p>


</div>
    
<footer>
<div id="foot0" id="row">
<p class="Footer   col-lg-12">&copy;Copyright 2020 Information potal of bangladesh | Developed By Sumiha</p>
</div>
</footer>

</div>
</div>
<script src="js/jquery-3.3.1.slim.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
 <script src="js/bootstrap-4-navbar.js"></script>
 
<script type="text/javascript" src="js/jquery-1.9.0.min.js"></script>
<script type="text/javascript" src="js/jquery.nivo.slider.js"></script>
<script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider();
    });
    </script>
<!-- AOS JS -->
    <script src="aos/dist/aos.js"></script>
    <script type="text/javascript">
      AOS.init({
        easing: 'ease-in-out-sine'
      });
    </script>

</body>
</html>
