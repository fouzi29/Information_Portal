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
          background: #a8ff78;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #78ffd6, #a8ff78);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #78ffd6, #a8ff78); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

        }
       
tr{
  background-color: #CFD8DC;
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
      <div id="#hbody">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 " style="height: 100px; background-color:; ">
                            <h2 style="text-align: center; margin-left: 80px; color:#642b73; font-size: 36px;">
                              BUS SCHEDULE
                            <div class="hmbt" style="margin-right: 90px; margin-top: -25px;"><span style="float: right;"><a href="Homepage.php" class="btn btn-info btn-lg" style="background-color: orange;">Back</a></span></div>
                            </h2>
                    </div>
                </div>
            </div>

            <div class="education-info text-center">
                <div class="container-fluid">
                    <div class="row" >
                        <div class="col-md-12 " style="">
                            
                            <form action="businfo.php" method="post">
                <input type="text" name="city" placeholder="Enter The City Name" style="width: 240px;height: 35px;">
               
                <input type="submit" name="show" value="SHOW INFO" class="btn btn-success text-center" style="margin-left: 30px;background-color: red;" >  
                            </form>
                        </div>
                    </div>
                </div>
            </div>

<table class="table table-striped table-bordered table-responsive text-center">
    <tr >
        <th class="text-center">Bus Name</th>
        <th class="text-center">City</th>
        <th class="text-center">Source</th>
        <th class="text-center">Time</th>
        <th class="text-center">Destination</th>
        <th class="text-center">Contact</th>
    </tr>
<?php 
error_reporting(0);
    include('dbcon.php');
    if (isset($_POST['show'])) {

        $City = $_POST['city'];

        $sql = "SELECT * FROM `businfo` WHERE  `city`='$City'";

        $result = mysqli_query($conn,$sql);
        if (mysqli_num_rows($result)>0) {
           
            while ($DataRows = mysqli_fetch_assoc($result)) {
               
                $Name = $DataRows['bus_name'];
                $City = $DataRows['city'];
                $Source = $DataRows['src'];
                $Time = $DataRows['time'];
                $Destination = $DataRows['dst'];
                $Contact = $DataRows['contact'];
                ?>
                <tr>
                    <td><?php echo $Name; ?></td>
                    <td><?php echo $City; ?></td>
                    <td><?php echo $Source; ?></td>
                    <td><?php echo $Time; ?></td>
                    <td><?php echo $Destination; ?></td>
                    <td><?php echo $Contact;?></td>
                </tr>
                <?php
                
            }
            echo "";
            
        } else {
            echo "<tr><td colspan ='7' class='text-center'>No Record Found</td></tr>";
        }
    }

 ?>
 
<div>
   <footer>
<div id="foot0" id="row">
<p class="Footer  col-12 col-lg-12">&copy;Copyright 2020 Information potal of bangladesh | Developed By fouzi</p>
</div>
</footer>
  </div>
    </div>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>
