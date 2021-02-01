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
background: #acb6e5;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #86fde8, #acb6e5);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #86fde8, #acb6e5); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */


    }  
    th{
  background: linear-gradient(#0b132b,#0b132b,#0b132b);
  color: orange;
 }   
tr{
  background-color: #CFD8DC;
  color: #E53935;
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
   border: 2px solid #dddddd;
}
    input{
        margin-bottom: 20px;
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
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 " style="height: 100px; margin-right: 90px; ">
                            <h2 style="text-align: center; margin-left: 80px;color:#0b132b;">
                            TRAIN SCHEDULE
                            <span style="float: right;background-color: orange; "><a href="Homepage.php" class="btn " style="color:white;">Back </a></span>
                            </h2>
                    </div>
                </div>
            </div>

            <div class="education-info text-center">
                <div class="container-fluid">
                    <div class="row" style="">
                        <div class="col-md-12 " style="">
                            
                            <form action="traininfo.php" method="post" class="frm" style="height: 50px; ">
                <input type="text" name="city" placeholder="Enter The City Name" class="inp"style="width: 240px;height: 35px; ">
               
                <input type="submit" name="show" value="SHOW INFO" class="btn btn-success text-center" style="margin-left: 30px; background-color: red;" >  
                            </form>
                        </div>
                    </div>
                </div>
            </div>

<table class="table table-striped table-bordered table-responsive text-center">
    <tr >
        <th class="text-center">Train Name</th>
        <th class="text-center">City</th>
        <th class="text-center">Off_Day</th>
        <th class="text-center">Source</th>
        <th class="text-center">Time</th>
        <th class="text-center">Destination</th>
        
    </tr>
<?php 
error_reporting(0);
    include('dbcon.php');
    if (isset($_POST['show'])) {

        $City = $_POST['city'];

        $sql = "SELECT * FROM `traininfo` WHERE  `city`='$City'";

        $result = mysqli_query($conn,$sql);
        if (mysqli_num_rows($result)>0) {
           
            while ($DataRows = mysqli_fetch_assoc($result)) {
                $Id = $DataRows['id'];
                $Name = $DataRows['train_name'];
                $City = $DataRows['city'];
                $Off_Day = $DataRows['off_day'];
                $Source = $DataRows['src'];
                $Time = $DataRows['time'];
                $Destination = $DataRows['dst'];
               
                ?>
                <tr>
                    <td><?php echo $Name; ?></td>
                    <td><?php echo $City; ?></td>
                    <td><?php echo $Off_Day;?></td>
                    <td><?php echo $Source; ?></td>
                    <td><?php echo $Time; ?></td>
                    <td><?php echo $Destination; ?></td>
                   
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
<p class="Footer  col-12 col-lg-12">&copy;Copyright 2020 Information potal of bangladesh | Developed By Sumiha</p>
</div>
</footer>
    </div>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>
