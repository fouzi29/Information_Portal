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
 background: #AAFFA9;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #11FFBD, #AAFFA9);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #11FFBD, #AAFFA9); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

   /* Full height */

  height: 100%; 

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}



.link>figure>a{
  color: red;
  padding-left: 10px;
}
#doctorlist{
  height: 500px;
  

  margin-top: 0px;
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
   color:black;
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
   color:white;
   height: 52px;
   width: 1520px;
 /*
 background: linear-gradient(#22194F,#64E986,#64E986,#22194F);
 */
background: linear-gradient(#0b132b,#0b132b,#0b132b);
  text-align: center;
  padding-top: 10px;
  margin-top:0px;
  margin-left:0px;
   
   left: 0;
   bottom: 0;
 }

</style>

</head>
<body >
 
<div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 " style="height: 100px; background-color:; ">
                            <h2 style="text-align: center; margin-left: 80px; color:#642b73; font-size: 36px;">
                              DOCTOR DETAILS
                            <div class="hmbt" style="margin-right: 90px; margin-top: -25px;"><span style="float: right;"><a href="Homepage.php" class="btn btn-info btn-lg" style="background-color: orange;">Back</a></span></div>
                            </h2>
                    </div>
                </div>
            </div>

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
      echo "Total number of doctor:$r ";
      session_start();
      if(isset($_POST['std'])) 
        {
          $nm=$_POST['std'];
      $query = "SELECT * FROM doctor WHERE doctorn like '%$nm%' or diagn like '%$nm%'";
      $results = mysqli_query($conn, $query);
      $r1= mysqli_num_rows($results) ;
     

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
<p class="Footer   col-lg-12">&copy;Copyright 2020 Information potal of bangladesh | Developed By fouzi</p>
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
<section> 
     