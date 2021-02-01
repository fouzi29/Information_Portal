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
       td, th {
  border: 2px solid black;
  text-align: left;
  padding: 8px;
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
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12"style="height: 100px; background-color:   #66CDAA; ">
                            <h2 class="myh2" style="text-align: center; margin-left: 80px; color:#642b73; font-size: 36px; ">
                                MEDICAL INFORMATION
                            <span style="float: right;"><a href="Homepage.php" class="btn btn-primary btn-lg "style="background-color: orange;">Back </a></span>
                            </h2>
                    </div>
                </div>
            </div>

            <div class="medical-info text-center" style=" margin-top: 10px;">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12" style="">
                           
                            <form action="mdclhm.php" method="post">
                <input type="text" name="city" placeholder="Enter The City Name" style="width: 240px;height: 35px;">
               
                  <input type="submit" name="show" value="SHOW INFO" class="btn btn-primary text-center" style="margin-left: 30px;" >  
                            </form>
                        </div>
                    </div>
                </div>
            </div>

<table class="table table-striped table-bordered table-responsive text-center" style=" margin-top: 10px">
    <tr >
        <th class="text-center">Number</th>
        <th class="text-center">Medical Name</th>
        <th class="text-center">City</th>
        <th class="text-center"> Medical Helpline Number</th>
        <th class="text-center">Picture</th>
    </tr>
<?php 
    include('dbcon.php');
    if (isset($_POST['show'])) {

        $City = $_POST['city'];

        $sql = "SELECT * FROM `medicalinfo` WHERE  `city`='$City'";

        $result = mysqli_query($conn,$sql);
        if (mysqli_num_rows($result)>0) {
            while ($DataRows = mysqli_fetch_assoc($result)) {
                $Id = $DataRows['id'];
                $Number = $DataRows['number'];
                $Name = $DataRows['name'];
                $City = $DataRows['city'];
                $Pcontact = $DataRows['pcontact'];
                $Picture = $DataRows['image'];
                ?>
                <tr>
                    <td><?php echo $Number;?></td>
                    <td><a href=""></a><?php echo $Name; ?></td>
                    <td></a><?php echo $City; ?></td>
                    <td><?php echo $Pcontact; ?></td>
                    <td><img src="databaseimg/<?php echo $Picture;?>" alt="img"></td>
                </tr>
                <?php
                
            }
            
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

