<?php
include("dbcon.php");
error_reporting(0);
?>

<!DOCTYPE html>
<html>
<head>
<title>ADD BUS</title>
<link rel="stylesheet" type="text/css" href="adregstyle.css.">
</head>
<style >
  body
{
background-image: linear-gradient(to right top, #77d16b, #00b68d, #0095a0, #007299, #184e7a, #3c4370, #4e375f, #572d4c, #74344f, #8e3c4c, #a44a45, #b35d3a);
   height: 92vh;

}

#register
{
  color:black;
    background: rgba(0,0,0,0.5);
    padding: 40px;
    width: 350px;
    margin:0 auto ;
    margin-top: 50px;
    height:510px;
    margin-left: 450px;
    
}
form
{
   margin: 0 auto;
    text-align: center;
}
#rgfrom{
    margin: 0 auto;
  margin-top:-5px;
}
input
{
    width: 250px;
    text-align: center;
    background: transparent;
    border: none;
    border-bottom: 1px solid #fff;
    font-size: 16px;
    font-weight: 200px; 
    text-align: center;
    padding: 5px 0px;
    transition: border 0.5s;
    outline: none;
    color:white; 
}
input[type=submit]
{
    border: none;
    width:115px;
    background: white;
    color: black;
    font-size: 16px;
    line-height: 25px;
    padding: 10px 0;
    border-radius: 30px;
    cursor: pointer;
}
input[type=submit]:hover
{
    color: #fff;
    background-color:black;
}
h2
{ 
    color: white;
    
}
a
{
    color:red;
    
}
a:hover
{
    color:blue;
}
#container
{
  margin-top: 5px;
    color:yellow;
    font-size: 18px;
}

#footer{
    margin-top: 80px;
    background-color:black;
    padding:10px;
    text-align:center;
}

#footer p{
    color:#fff;
}

</style>
<body>
 
<div id="register">

  
  <form id="rgfrom" action="addbus.php" method="post">
      <h2>ADD BUS</h2>
     <input type="text" name="bid" placeholder="Busid"  required/><br /><br />
     <input type="text" name="bname" placeholder="Busname" required/><br /><br />
     <input type="text" name="route" placeholder="Source to destination" required/><br /><br />
     <input type="date" name="date" placeholder="Date"  required/><br /><br />
     <input type="time" name="time" placeholder="Time"  required/><br /><br />
     <input type="number" name="noseat" placeholder="number of seat"  required/><br /><br />
    <input type="submit" name="submit" value="submit" /></a> <br /><br />
        <div id="container">
              Back to admin page<a href="../admin.php">&nbsp;Admin Index</a>
        </div>


  <?php 
   if($_POST['submit']) {
      $bid=$_POST['bid'];
      $bn=$_POST['bname'];
      $br=$_POST['route'];
      $bd=$_POST['date'];
      $bt=$_POST['time'];
      $bs=$_POST['noseat'];
    ;

      $query1 = "SELECT * FROM addbus WHERE busid='$bid'";
      $results = mysqli_query($conn, $query1);
      $r= mysqli_num_rows($results) ;

      if ($r>=1) {
      header('location:addbus.php') ;
     echo "the user name already taken" ;
    
    }else {
    session_start() ;
    $_SESSION['seatn']=$bs;
      $query="INSERT INTO addbus VALUES ('','$bid','$bn','$br','$bd',' $bt','$bs')" ;
         $data=mysqli_query($conn,$query) ;
         if($data)
         echo "data inserted " ;
       else
        echo "Fill the form" ;
    } 
  }
        else
          echo"" ; 
        
      
   ?>
   </form>
        
      
</div>

</body>
</html>