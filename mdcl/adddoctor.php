<?php
include("dbcon.php");
error_reporting(0);
?>

<!DOCTYPE html>
<html>
<head>
<title>ADDING DOCTOR</title>
<link rel="stylesheet" type="text/css" href="adddoctor.css">
</head>
<body>
<div id="ADDINGDOCTOR">

  
  <form id="rgfrom"  method="post">
      <h2>ADDING DOCTOR</h2>
     <input type="text" name="dname" placeholder="Doctor Name"  required/><br /><br />
     <input type="text" name="city" placeholder="City"  required/><br /><br />
     <input type="text" name="diagcn" placeholder="Diagonostic center name"  required/><br /><br />
     <input type="time" name="time" placeholder="Time"  required/><br /><br />
     <input type="text" name="contact" placeholder="contactinfo"  required/><br /><br />
      <input type="text" name="day" placeholder="Name of weekdays"  required/><br /><br />
    
    <input type="submit" name="submit" value="submit" /></a> <br /><br />
        <div id="container">
              Back to admin page<a href="./admin/admindash.php">&nbsp;Admin Index</a>
        </div>
 
   <?php 
   if($_POST['submit']) {
      $dn=$_POST['dname'];
      $city=$_POST['city'];
      $dcn=$_POST['diagcn'];
      $t=$_POST['time'];
      $dc=$_POST['contact'];
      $d=$_POST['day'];

      $query1 = "SELECT * FROM doctor WHERE doctorn='$dn'";
      $results = mysqli_query($conn, $query1);
      $r= mysqli_num_rows($results) ;

      if ($r>=1) {
      header('location:adddoctor.php') ;
     echo "the user name already taken" ;
    
    }else {
    session_start() ;

      $query="INSERT INTO `doctor`(`did`, `doctorn`, `city`, `diagn`, `time`, `day`, `contact`) VALUES (NULL,'$dn','$city','$dcn','$t','$d','$dc')" ;
         $data=mysqli_query($conn,$query) ;
         if($data)
         echo "data inserted " ;
       else
        echo "Fill the form" ;
    } 
  }
        else
          echo"The field is empty" ; 
        
      
?>

   </form>

      
</div>
</body>
</html>