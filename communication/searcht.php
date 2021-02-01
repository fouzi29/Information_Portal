 <?php
session_start() ;
include("connection.php");
error_reporting(0) ; 

?>
<!DOCTYPE html>
<html>
<head>
  <title>Project</title>
  <link rel="stylesheet" type="text/css" href="bus_schedules.css.">
</head>
<style >
  *{
  margin: 0px;
  padding: 0px;
}
body{
  background-color: blue;
  height: 100vh;
  width: 100%;
  
}
#menu{
  width: 100%;
  height: 80px;
  background-color: skyblue;
      
}

#rightmenu{
  width:10%; 
  height:100px;
  float: right;
}

#rightmenu ul {
  float:right;
  margin-top:-7px;
    list-style-type: none; 
}

#rightmenu ul li{
  float:right;
  position:relative;
  
}

#rightmenu ul li a{
  color:white;
  text-decoration:none;
  padding:38px 30px;
  display:inline-block;
  font-family:'Montserrat', sans-serif;

}
#rightmenu ul li a:hover{
  color:#FAB72A;;
}

#rightmenu ul li ul{
  list-style-type:none;
  padding:5px;
  position:absolute;
  left:-99999px;
  text-align: center;
  background-color: #339966;
   
  color:white
  
}

#rightmenu ul li:hover ul{
  left:0;
}

#rightmenu ul li ul li{
  float:none;
  border-right:none;
  border-left:none;
  border-top:1px solid #605B5B;
  border-bottom:1px solid #2B2A2A;  
  width:200px;
  position:relative;
} 

#leftmenu{
  
  width:30%;
  line-height:90px;
  float:left;
}
#leftmenu h4{

    padding-left: 60px;
    font-weight: bold;
    color: white;
  font-size: 22px;
  font-family:'Montserrat', sans-serif;
}
#pkdateandroute
{
  color:white;
   background: linear-gradient(0.25turn,#092834,#339966,#092834);
   
    
    padding:60px;
    width: 320px;
    margin: auto;
    margin-top:80px;
    height: 250px;
  
    }
form
{
    width: 240px;
    text-align: center;
}
#rgfrom{

  margin:auto ;
}
input
{  margin-top:30px;
  font-size: 16px;
    font-weight: 200px;
    padding: 10px 0px;
    width: 250px;
    text-align: center;
   border: 1px solid black;
}

input[type=submit]
{  
    
    width:115px;
    color: black;
    font-size: 16px;
    line-height: 25px;
    padding: 10px 0;
    border-radius: 30px;
    cursor: pointer;
}
input[type=submit]:hover
{
    color: white;
     background-color:black;
}

table {
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
.table{
margin-top:50px; 
margin-bottom: 50px;

}
button{
   width:115px;
    color: black;
    font-size: 16px;
    line-height: 25px;
    padding: 10px 0;
    border-radius: 30px;
    cursor: pointer;
    margin-left: 10px;
    margin-bottom: 15px;
}
button:hover
{
    color: white;
     background-color:orange;
}
#footer{
  margin-top: 80px;
  background-color:black;
  padding:15px;
  text-align:center;
}

#footer p{
  color:#fff;
  font-size: 18px;
}


</style>
<body>
  <div id="bgimage">
   <div id="menu">  
    <nav>
     <div id="rightmenu">
            <ul>
                <li><a href="../Homepage.php" title="">BACK</a></li>
                  
            </ul>
     </div>
    </nav>
     <div id="leftmenu">
        <h4>BUS SCHEDULES</h4>   
     </div>
   </div>

 
</div>
<div id="pkdateandroute">
<form id="rgfrom" action="" method="POST">
     <h2>Pick a Date and Route</h2>

   Available route
    <?php
     session_start();
     $result = $conn->query("select route from addbus");
    echo "<select  name='routes'>";
    while ($row = $result->fetch_assoc()) {
       
        $rou = $row['route'];
        echo '<option value=" '.$rou.'"  >'.$rou.'</option>';
    }
    echo "</select >";
    ?>
    <br /><br />
     <input type="date" name="data" placeholder="Date" required /><br /><br />
     <input type="submit" name="submit" / ></a> <br /><br />
</form>
<?php
session_start();
if(isset($_POST['routes']) && isset($_POST['data'])  )
  {
   
      $nm=$_POST['rou'];
      $p=$_POST['data'] ;

      $query = "SELECT * FROM addbus WHERE route like '$nm%' AND date like '%$p%'";
      $results = mysqli_query($conn, $query);
      $r= mysqli_num_rows($results) ;
      echo "$r";

      if ($r>=1) {
  ?>
</div>
<div class="table"> 
 <table>
  <tr>
    <th>busid</th>
    <th>busname</th>
    <th>route</th>
    <th>date</th> 
    <th>time</th>
    
  </tr>
  <?php
   while($row= mysqli_fetch_array($results)) {
session_start();
$bid=$row["busid"] ;
$_session["busname"]=$row["busname"] ;
$_session["route"]=$row["route"] ;
$_session["date"]=$row["date"] ;
$_session["time"]=$row["time"] ;

echo "<tr><td>" . $row["busid"]. "</td><td>" . $row["busname"] . "</td><td>"
. $row["route"]. "</td><td>". $row["date"]. "</td><td>".$row["time"]."</td></tr>"  ;
}
echo "</table>";
?>
</table>
</div>

    <?php        
    }else {
      echo "error please write correct spelling like  available route option" ;
    }
     
}
   else
   echo ""; 
        
   ?>


         <div id="footer">
           <p>&copy;Bus Reservation 2019. All Rights Reserved </p>
         </div>



</div>