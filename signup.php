<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="stylesheet" href="BOOTSTRAP/css/style.css.">
    <link rel="stylesheet" href="">
    <style>

    .socialDiv{
    background: url(img/pexels-photo-544268.jpeg);

  border-radius: 5px;
  cursor: pointer;
  transition: 0.3s;

}
.socialDiv:hover
 {opacity: 0.7;}

.sdiv{

    margin-top: 180px;
}
body{
     font-weight: bold;
    background-image: linear-gradient( 137.9deg, #D16BA5 17.8%, #E6E6FA 32.7%,  #B0E0E6 50.4%, #9370DB 71.5%, #D16BA5 83.1% );
    background-repeat: no-repeat;
    background-size: cover;
    background-attachment: fixed;
}
    </style>
</head>
<body>
    <div class="container">
        <div class="row sdiv" >
            <div class="col-md-4 offset-md-2 border text-center bg-light" style="border-radius: 5px;background-color: #d5adc8;
background-image: linear-gradient(315deg, #d5adc8 0%, #ff8489 74%);

">
                <i class="fa fa-user fa-3x mt-3"></i>
                <h2>Signup</h2>
                <div class="col-auto mt-2">
                    <div class="input-group mb-2">
                      <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fa fa-user"></i></div>
                      </div>
                      <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Enter Full Name">
                    </div>
                  </div>
                  <div class="col-auto">
                    
                    <div class="input-group mb-2">
                      <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fa fa-envelope-o"></i></div>
                      </div>
                      <input type="email" class="form-control" id="inlineFormInputGroup" placeholder="Enter Email">
                    </div>
                  </div>
                  <div class="col-auto">
                    
                    <div class="input-group mb-2">
                      <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fa fa-lock"></i></div>
                      </div>
                      <input type="password" class="form-control" id="inlineFormInputGroup" placeholder="Enter password">
                    </div>
                  </div>
                  <div class="col-auto">
                    
                    <div class="input-group mb-2">
                      <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fa fa-lock"></i></div>
                      </div>
                      <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Confirm password">
                    </div>
                  </div>

                  <div class="container text-center p-3">
                      <button class="btn btn-outline-danger badge-pill btn-lg">Signup</button>
                  </div>

            </div>

            <!--Send Div foe Social Media Login-->
            <div class="col-md-4 border text-center socialDiv">
                <h2 class="mt-3 text-white">Sign In With<br>Social Media</h2>

                <button class="btn btn-primary mt-5"><i class="fa fa-facebook-official p-2"></i>Login With Facebook</button><br>
                <button class="btn btn-warning mt-2 text-white"><i class="fa fa-instagram p-2"></i>Login With Instagram</button><br>
                <button class="btn btn-danger mt-2"><i class="fa fa-google-plus p-2 "></i>Login With Google+</button>

            </div>
        </div>
    </div>
 <script src="js/jquery-3.3.1.slim.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>