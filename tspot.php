 <?php
include("connection.php");
error_reporting(0) ; 
?>

<!DOCTYPE html>
<html>
<head>
  <title>Information of-Touristspot</title>

   <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

  <link rel="stylesheet" href="BOOTSTRAP/css/style.css.">
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="css/bootstrap-4-navbar.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="">
<style>



 body{
          background: #a8ff78;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #78ffd6, #a8ff78);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #78ffd6, #a8ff78); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

        }


h2{
  color:orange;
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
<body>

 <div id="hbody">
    
   
    <header>
    <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 " style="height: 100px; background-color:; ">
                            <h2 style="text-align: center; margin-left: 80px; color:#642b73; font-size: 36px;">
                              SPOT DETAILS
                            <div class="hmbt" style="margin-right: 90px; margin-top: -25px;"><span style="float: right;"><a href="Homepage.php" class="btn btn-info btn-lg" style="background-color: orange;">Back</a></span></div>
                            </h2>
                    </div>
                </div>
            </div>
<div class="tourist-info text-center">
 <div class="forms ">
  <form id="rgfrom" action="" method="POST">
     <input style=" color:orange; padding: 5px; margin: 8px; height: 30px; width: 250px;" type="text" name="std" placeholder="Enter Place Name" />
     <input style="padding: 5px; margin-left: 8px; height: 30px; border-radius:3px;color: #151B54; border:2px solid black" type="submit" value="Search" name="submit"/></a> 

   </form>
   </div>

   <?php
  

      session_start();
      if(isset($_POST['std'])) 
        {

    $inpText = $_POST['std'];
    $sql = 'SELECT tspic ,spotname FROM tourist WHERE location LIKE :c_title';
    $stmt = $db->prepare($sql);
    $stmt->execute(['c_title' => '%' . $inpText . '%']);
    $result = $stmt->fetchAll();
    if ($result) {
        
      foreach ($result as $row) {?>
  <div class="table"> 
   <table class="table table-hover table-white table-striped" id="table-data" style="margin-top: 10px;">
  <tr>
    <th>Spot Picture</th>
    <th>Informarion</th>
  </tr>
  <?php
  session_start(); 
   echo "<h3>List Of All Spot</h3>";
   echo '<tr><td>'. $row["tspic"].'</td><td>"<a href="show.php?id='. $row[' tsid'].'">'.$row["spotname"].'</a>"click On the name""</td></tr>' ;
   
}
      }
     else {
      echo '<p class="list-group-item border-1">No Record</p>';
    }
}
  ?>

 </div>
 <section> 

<div   > 
 <table class="table table-hover table-info table-bordered table-striped" id="table-data" style="margin-top: 10px; color: black;background-color: #273549 ;">
  <thead  class="thead-dark">
    
  <tr style="font-size: 18px;">
    <th>Spot Picture</th>
    <th>Information</th>
  </tr>
  </thead>
<?php

  $stmt = $db->query('SELECT tspic,tsid,spotname FROM tourist');
  $stmt->execute();
    
   echo "<h2>List Of All Spot</h2>";
while($row= $stmt->fetch()) {
echo '<tr><td>'. $row["tspic"].' </td> <td>"<a href="show.php?id='. $row['tsid'].'">'.$row["spotname"].'</a>"</td></tr>'  ;
}

?>

   </table> 
  </div>      
    
 </section>
<footer>
<div id="foot0" id="row">
<p class="Footer  col-12 col-lg-12">&copy;Copyright 2020 Information potal of bangladesh | Developed By Sumiha</p>
</div>
</footer>
</div>


</div>


</div>
</div>

 
<script src="js/jquery-3.3.1.slim.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
 <script src="js/bootstrap-4-navbar.js"></script>

<script type="text/javascript" src="js/jquery-1.9.0.min.js"></script>

 <script type="text/javascript" src="js/jquery-1.9.0.min.js"></script>
   
  
    
</body>
</html>