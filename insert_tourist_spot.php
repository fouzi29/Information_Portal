<?php
include("connection.php");
error_reporting(0) ;
?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
   <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="css/bootstrap-4-navbar.css" rel="stylesheet">
  <style >
    body{


   height: 100%; 

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;

}
.hbody{
  
 width: 1200px ;
 margin:0 auto;
 background-color:#0b132b;
 /*background-image: linear-gradient(315deg, #4c131a 0%, #4c131a);*/
  box-sizing:border-box;
  border-radius: 4px;
  box-shadow: 0 2px 5px black;
   margin-bottom: 20px;
}

    .h2{
      color: orange;
      background-color:#7F525D;
      width:196px;
      height:55px; 
      font-size: 20px;
      margin-right: 10px;

    }

   .label{
    font-size:24px;
    color:#4c131a;
    margin-top:50px;

   } 
   .row{
   
    margin-left: -250px;

   }
   .form-control{
    background-color:#4E8975;
    font-size: 20px; 
    border-bottom: 2px solid #4d0000;
    border-radius: 0px ;
    color:#FBF6D9;
   }
   .col-md-10{
    background-color:#FBF6D9;
    height: 100%;
    box-shadow: -1px 2px 59px 10px #003d3d inset;

   }
   .mceEditor{
    height: 25%;
    
   }
   button{
    margin-bottom: 10px;
   }
   
  </style>

</head>

<br>
<body style="margin:0px;">
  <div class="hbody">
    <script src="//tinymce.cachefly.net/4.0/tinymce.min.js"></script>
    <script>
          tinymce.init({
             mode : "specific_textareas",
    editor_selector : "mceEditor",
              plugins: [
                  "advlist autolink lists link image charmap print preview anchor",
                  "searchreplace visualblocks code fullscreen",
                  "insertdatetime media table contextmenu paste"
              ],
              toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
          });
  </script>

    <?php

    //if form has been submitted process it
    if(isset($_POST['submit'])){

 

        //collect form data
        extract($_POST);

       
        if($spotname ==''){
            $error[] = 'Please enter the title.';
        }

        if($description ==''){
            $error[] = 'Please enter the description.';
        }

if(!isset($error)){

      try {
    //insert into database

     $stmt = $db->prepare('INSERT INTO tourist (spotname,location,contact,description,tspic) VALUES (:spotname,:location, :contact, :description,:tspic)') ;
  
$stmt->execute(array(
    ':spotname' => $spotname ,
    ':location' => $location,
    ':contact' => $contact,
    ':description' => $description,
    ':tspic' => $tspic,
 
));
 
 //redirect to index page
    header('Location: tspot.php?action=added');
    exit;

}catch(PDOException $e) {
                echo $e->getMessage();
            }

        }

    }

    //check for any errors
    if(isset($error)){
        foreach($error as $error){
            echo '<p class="message">'.$error.'</p>';
        }
    }
    ?>
    <div class="container" >
      
  
    <div class="row">
      <div class="col-md-2"></div>
      <div class="col-md-10">
        
    <div class="h2"><h2>Add All Spot</h2></div>
      
       <form  action="" method="post">
       <label class="label">Enter Spot Name</label><br>
        <input type="text" class="form-control" name="spotname" style="width:100%;height:40px" value="<?php if(isset($error)){ echo $_POST['spotname'];}?>">

       <label class="label">Enter Location</label><br>
        <input type="text" class="form-control" name="location" style="width:100%;height:40px" value="<?php if(isset($error)){ echo $_POST['location'];}?>">

       <label class="label">Enter contact</label><br>
        <input type="text" class="form-control"  name="contact" style="width:100%;height:40px" value="<?php if(isset($error)){ echo $_POST['contact'];}?>">

       <label class="label">Enter Description</label><br>
        <textarea name="description" id="textarea1" class="mceEditor" cols="120" rows='20'><?php if(isset($error)){ echo $_POST['description'];}?></textarea>
        
        <label class="label">Add Pic only</label><br>
        <textarea  name="tspic" id="textarea2" class="mceEditor" cols="120" rows='20'><?php if(isset($error)){ echo $_POST['tspic'];}?></textarea>
       <div class="btn" > <button class="btn btn-info btn-primary" name="submit"  >Submit</button></div>
       

    </form>
     </div>
    </div>
      </div>
    </div>
<script src="js/jquery-3.3.1.slim.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
 </body>
</html>
