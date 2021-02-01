<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="https://fonts.googleapis.com/css?family=Inter:400,800,900&display=swap" rel="stylesheet">

   <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

  <link rel="stylesheet" href="BOOTSTRAP/css/style.css.">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="css/bootstrap-4-navbar.css" rel="stylesheet">
  <style>
  	body {
    position: relative;
    overflow-x: hidden;
    background-color:#FBF6D9;
    box-shadow: -1px 2px 59px 10px #003d3d inset;
}
body,
html { height: 100%;}
.nav .open > a, 
.nav .open > a:hover, 
.nav .open > a:focus {background-color: transparent;}

/*-------------------------------*/
/*           Wrappers            */
/*-------------------------------*/

#wrapper {
    padding-left: 0;
    -webkit-transition: all 0.5s ease;
    -moz-transition: all 0.5s ease;
    -o-transition: all 0.5s ease;
    transition: all 0.5s ease;
}

#wrapper.toggled {
    padding-left: 220px;
}

#sidebar-wrapper {
    z-index: 1000;
    left: 220px;
    width: 0;
    height: 100%;
    margin-left: -220px;
    overflow-y: auto;
    overflow-x: hidden;
    background: #1a1a1a;
    -webkit-transition: all 0.5s ease;
    -moz-transition: all 0.5s ease;
    -o-transition: all 0.5s ease;
    transition: all 0.5s ease;
}

#sidebar-wrapper::-webkit-scrollbar {
  display: none;
}

#wrapper.toggled #sidebar-wrapper {
    width: 275px;
}

#page-content-wrapper {
    width: 100%;
    padding-top: 70px;
}

#wrapper.toggled #page-content-wrapper {
    position: absolute;
    margin-right: -220px;
}

/*-------------------------------*/
/*     Sidebar nav styles        */
/*-------------------------------*/
.navbar {
  padding: 0;
}

.sidebar-nav {
    position: absolute;
    top: 0;
    width: 250px;
    margin: 0;
    padding: 0;
    list-style: none;
}

.sidebar-nav li {
    position: relative; 
    line-height: 20px;
    display: inline-block;
    width: 100%;
}

.sidebar-nav li:before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    z-index: -1;
    height: 100%;
    width: 3px;
    background-color: #1c1c1c;
    -webkit-transition: width .2s ease-in;
      -moz-transition:  width .2s ease-in;
       -ms-transition:  width .2s ease-in;
            transition: width .2s ease-in;

}
.sidebar-nav li:hover{
  background: skyblue !important;
  border-radius: 10px;
  margin-left: 10px;
  margin-right: 10px;
}
.sidebar-nav li:hover:before,
.sidebar-nav li.open:hover:before {
    width: 100%;
    -webkit-transition: width .2s ease-in;
      -moz-transition:  width .2s ease-in;
       -ms-transition:  width .2s ease-in;
            transition: width .2s ease-in;

}

.sidebar-nav li a {
    display: block;
    color: #ddd;
    text-decoration: none;
    padding: 10px 15px 10px 30px;    
}

.sidebar-nav li a:hover,
.sidebar-nav li a:active,
.sidebar-nav li a:focus,
.sidebar-nav li.open a:hover,
.sidebar-nav li.open a:active,
.sidebar-nav li.open a:focus{
    color: #fff;
    text-decoration: none;
    background-color: transparent;
}
.sidebar-header {
    text-align: center;
    font-size: 20px;
    position: relative;
    width: 100%;
    display: inline-block;
}
.sidebar-brand {
  font-size: 24px;
    height: 70px;
    position: relative;
    background:#212531;
    background: linear-gradient(to right bottom, #2f3441 50%, #212531 50%);
   padding-top: 1em;
}
.sidebar-brand a {
    color: #ddd;
}
.sidebar-brand a:hover {
    color: #fff;
    text-decoration: none;
}
.dropdown-header {
    text-align: center;
    font-size: 1em;
    color: #ddd;
    background:#212531;
    background: linear-gradient(to right bottom, #2f3441 50%, #212531 50%);
}
.sidebar-nav .dropdown-menu {
    position: relative;
    width: 100%;
    padding: 0;
    margin: 0;
    border-radius: 0;
    border: none;
    background-color: #222;
    box-shadow: none;
}
.dropdown-menu.show {
    top: 0;
}
/*Fontawesome icons*/
.nav.sidebar-nav li a::before {
    font-family: fontawesome;
    content: "\f12e";
    vertical-align: baseline;
    display: inline-block;
    padding-right: 5px;
}
a[href*="#home"]::before {
  content: "\f015" !important;
}
a[href*="#about"]::before {
  content: "\f129" !important;
}
a[href*="#events"]::before {
  content: "\f073" !important;
}
a[href*="#events"]::before {
  content: "\f073" !important;
}
a[href*="#team"]::before {
  content: "\f0c0" !important;
}
a[href*="#works"]::before {
  content: "\f549" !important;
}
a[href*="#pictures"]::before {
  content: "\f03e" !important;
}
a[href*="#videos"]::before {
  content: "\f03d" !important;
}
a[href*="#books"]::before {
  content: "\f02d" !important;
}
a[href*="#art"]::before {
  content: "\f1fc" !important;
}
a[href*="#awards"]::before {
  content: "\f02e" !important;
}
a[href*="#services"]::before {
  content: "\f013" !important;
}
a[href*="#contact"]::before {
  content: "\f086" !important;
}
a[href*="#followme"]::before {
  content: "\f099" !important;
  color: #0084b4;
}
/*-------------------------------*/
/*       Hamburger-Cross         */
/*-------------------------------*/

.hamburger {
  position: fixed;
  top: 20px;  
  z-index: 999;
  display: block;
  width: 32px;
  height: 32px;
  margin-left: 15px;
  background: transparent;
  border: none;
}
.hamburger:hover,
.hamburger:focus,
.hamburger:active {
  outline: none;
}
.hamburger.is-closed:before {
  content: '';
  display: block;
  width: 100px;
  font-size: 14px;
  color: #fff;
  line-height: 32px;
  text-align: center;
  opacity: 0;
  -webkit-transform: translate3d(0,0,0);
  -webkit-transition: all .35s ease-in-out;
}
.hamburger.is-closed:hover:before {
  opacity: 1;
  display: block;
  -webkit-transform: translate3d(-100px,0,0);
  -webkit-transition: all .35s ease-in-out;
}

.hamburger.is-closed .hamb-top,
.hamburger.is-closed .hamb-middle,
.hamburger.is-closed .hamb-bottom,
.hamburger.is-open .hamb-top,
.hamburger.is-open .hamb-middle,
.hamburger.is-open .hamb-bottom {
  position: absolute;
  left: 0;
  height: 4px;
  width: 100%;
}
.hamburger.is-closed .hamb-top,
.hamburger.is-closed .hamb-middle,
.hamburger.is-closed .hamb-bottom {
  background-color: #1a1a1a;
}
.hamburger.is-closed .hamb-top { 
  top: 5px; 
  -webkit-transition: all .35s ease-in-out;
}
.hamburger.is-closed .hamb-middle {
  top: 50%;
  margin-top: -2px;
}
.hamburger.is-closed .hamb-bottom {
  bottom: 5px;  
  -webkit-transition: all .35s ease-in-out;
}

.hamburger.is-closed:hover .hamb-top {
  top: 0;
  -webkit-transition: all .35s ease-in-out;
}
.hamburger.is-closed:hover .hamb-bottom {
  bottom: 0;
  -webkit-transition: all .35s ease-in-out;
}
.hamburger.is-open .hamb-top,
.hamburger.is-open .hamb-middle,
.hamburger.is-open .hamb-bottom {
  background-color: #1a1a1a;
}
.hamburger.is-open .hamb-top,
.hamburger.is-open .hamb-bottom {
  top: 50%;
  margin-top: -2px;  
}
.hamburger.is-open .hamb-top { 
  -webkit-transform: rotate(45deg);
  -webkit-transition: -webkit-transform .2s cubic-bezier(.73,1,.28,.08);
}
.hamburger.is-open .hamb-middle { display: none; }
.hamburger.is-open .hamb-bottom {
  -webkit-transform: rotate(-45deg);
  -webkit-transition: -webkit-transform .2s cubic-bezier(.73,1,.28,.08);
}
.hamburger.is-open:before {
  content: '';
  display: block;
  width: 100px;
  font-size: 14px;
  color: #fff;
  line-height: 32px;
  text-align: center;
  opacity: 0;
  -webkit-transform: translate3d(0,0,0);
  -webkit-transition: all .35s ease-in-out;
}
.hamburger.is-open:hover:before {
  opacity: 1;
  display: block;
  -webkit-transform: translate3d(-100px,0,0);
  -webkit-transition: all .35s ease-in-out;
}

/*-------------------------------*/
/*            Overlay            */
/*-------------------------------*/


  </style>
</head>
<body>
	<div id="wrapper">
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark" style="height: 50px;">
        <div class="container">
            <a href="index.html" class="navbar-brand text-warning">
               <i class="fa fa-snowflake"></i> Information Portal of Bangladesh
            </a>
            <button class="navbar-toggler" data-toggle="collapse" data-target="#ui-navbar">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="ui-navbar">
                
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="#" data-toggle="dropdown">
                            <i class="fa fa-sign-in-alt text-muted"></i>Sumiha</a>
                        <div class="dropdown-menu p-2">
                            <a href="profile.html" class="dropdown-item">
                               <i class="fa fa-user-circle"></i> Profile</a>
                            <a href="settings.html" class="dropdown-item">
                                <i class="fa fa-cogs"></i> Settings</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.html">
                            <i class="fa fa-sign-out-alt text-muted"></i> LogOut</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

   
    
        <!-- Sidebar -->
    <nav class="navbar navbar-inverse fixed-top" id="sidebar-wrapper" role="navigation">
     <ul class="nav sidebar-nav">
       <div class="sidebar-header">
       <div class="sidebar-brand">
         <a href="#">Admin Panel</a></div></div>
       <li><a href="#home">Home</a></li>
       
       <li class="dropdown">
       <a href="#books" class="dropdown-toggle"  data-toggle="dropdown">Education Information<span class="caret"></span></a>
      <ul class="dropdown-menu animated fadeInLeft" role="menu">
    
      <li><a href="edu/admin/addeduinfo.php">Add Institute Information</a></li>
      <li><a href="edu/admin/deleteeduinfo">Delete Institute Information</a></li>
      <li><a href="edu/andin/Updatefrom">Update Institute Information</a></li>
      </ul>
      </li>
        <li class="dropdown">
       <a href="#events" class="dropdown-toggle"  data-toggle="dropdown">Tourist Spot<span class="caret"></span></a>
     <ul class="dropdown-menu animated fadeInLeft" role="menu">
      
     <li><a href="insert_tourist_spot.php">Add Tourist Spot</a></li>
      
      </ul>
      </li>
       <li class="dropdown">
       <a href="#books" class="dropdown-toggle"  data-toggle="dropdown">Medical Information<span class="caret"></span></a>
      <ul class="dropdown-menu animated fadeInLeft" role="menu">
    
      <li><a href="mdcl/admin/addmedicalinfo.php">Add Medical Details</a></li>
      <li><a href="mdcl/admin/deletemedicalinfo.php">Delete Medical Details</a></li>
      <li><a href="mdcl/admin/updatemedical.php">Update Medical Details</a></li>

      <li><a href="doctor/admin/addeduinfo.php">Add Doctor Details</a></li>
      <li><a href="doctor/admin/deleteeduinfo.php">Delete Doctor Details</a></li>
      <li><a href="doctor/admin/Updatefrom.php">Update Doctor Details</a></li>
      </ul>
      </li>
        <li class="dropdown">
         <a href="#books" class="dropdown-toggle"  data-toggle="dropdown">Transport & Communication<span class="caret"></span></a>
      <ul class="dropdown-menu animated fadeInLeft" role="menu">
      
     <li><a href="bus/admin/addbusinfo.php">Add Bus Information</a></li>
      <li><a href="bus/admin/deletebusinfo.php">Delete Bus Information</a></li>
      <li><a href="bus/admin/Updatebus.php">Update Bus Information</a></li>
        <li><a href="train/admin/addtraininfo.php">Add Train Information</a></li>
      <li><a href="train/admin/deletetraininfo.php">Delete Train Information</a></li>
      <li><a href="train/admin/updatetrain.php">Update Train Information</a></li>
      </ul>
      </ul>
       </li>
  </nav>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <button type="button" class="hamburger animated fadeInLeft is-closed" data-toggle="offcanvas" style="color: green">
                <span class="hamb-top"></span>
    			<span class="hamb-middle"></span>
				<span class="hamb-bottom"></span>
            </button>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                                     
                    </div>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->
<script src="js/jquery-3.3.1.slim.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<script>
	$(document).ready(function () {
  var trigger = $('.hamburger'),
      overlay = $('.overlay'),
     isClosed = false;

    trigger.click(function () {
      hamburger_cross();      
    });

    function hamburger_cross() {

      if (isClosed == true) {          
        overlay.hide();
        trigger.removeClass('is-open');
        trigger.addClass('is-closed');
        isClosed = false;
      } else {   
        overlay.show();
        trigger.removeClass('is-closed');
        trigger.addClass('is-open');
        isClosed = true;
      }
  }
  
  $('[data-toggle="offcanvas"]').click(function () {
        $('#wrapper').toggleClass('toggled');
  });  
});
</script>

</body>
</html>