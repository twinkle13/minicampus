<!-- <?php
 
    // Include header file
   // require_once("header.php");
?>
<div class="big_part">
    <div class="main">
        <center>
            <div id="main_1">
                <p>MINICAMPUS</p>
                <h3>Your own platform to learn and explore.</h3>
                <a href="login.php?key=st"><button class="btn btn-success" style="border-radius:20px;">Login As Student</button></a>
                 <a href="login.php?key=te"><button class="btn btn-success" style="border-radius:20px;margin-left:50px;">Login As Teacher</button></a>
                <a href="signup.php"><button class="btn btn-success" style="border-radius:20px;margin-left:50px;">Sign Up</button></a>
            </div>
        </center>
    </div>

    <div id="main_2">
        <center>
            <p style="color:grey;padding-top:50px;">"Learn and communicate"</p>
            <p><b>- MINICAMPUS</b></p>
        </center>
    </div>

    <div id="main_3">
        <center>
            <div class="main_31" style="margin-left:120px;">
                <h2><b>NOTICES</b></h2>
                <p style="margin:30px;"></p>
            </div>

            <div class="main_32">
                <h2><b>EVENTS</b></h2>
                <p style="margin:30px;">.</p>
            </div>

            <div class="main_33">
                <h2><b>ASSIGNMENTS</b></h2>
                <p style="margin:30px;">
            </div>
        </center>
    </div>

    <div id="main_4">
        <center>
           <! <h1 style="padding-top:100px;font-size:45px;"><b></b></h1>
            <p style="color:grey;font-size:20px;"></p> -->
          <!--   <a href="login.php"><button class="btn btn-info" style="margin-top:50px;border-radius:10px;">click Me To login</button></a>
        </center>
    </div>
</div> -->

<!-- <?php
    //require_once("footer.php");
 ?> --> 

 <!doctype html>
<html>
<head>
 <!-- <link href="font-awesome-4.6.1/css/font-awesome.min.css" rel="stylesheet" type="text/css">  --> 
<link href="css/bantiMenu.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">    
   
 <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
<script src="css/bootstrap.min.js"></script>
   
</head>
 <body>
  
<ul class="bg-slideshow" style="opacity:0.9">
<li id="li1"><span>Image 01</span></li>
    <li id="li2"><span>Image 02</span></li>
    <li id="li3"><span>Image 03</span></li>
</ul> 



<div class="container">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" align="center">
<div class="BS">
<h1>WELCOME TO MINICAMPUS</h1>
<h3>Please Login / Sign Up  here</h3>
</div>
</div>
</div>
</div>

 <div class="flip3d">
    <div class="front"> <a href="login.php?key=st"><button class="img-circle" name="login"><h2><i class="fa fa-user fa-2x"></i></h2></button></a></div>
    <div class="back"><a href="login.php?key=st"><button class="img-circle" name="login"><h3>STUDENT LOGIN</h3></button></a></div>
</div>
 <div class="flip3d">
    <div class="front"> <a href="login.php?key=te"><button class="img-circle" name="login"><h2><i class="fa fa-user-secret fa-2x"></i></h2></button></a></div>
    <div class="back"><a href="login.php?key=te"><button class="img-circle" name="login" ><h3>FACULTY LOGIN</h3></button></a></div>
</div>
 <div class="flip3d">
    <div class="front"> <a href="signup.php"><button class="img-circle" name="signup"><h2><i class="fa fa-user-plus fa-2x"></i></h2></button></a></div>
    <div class="back"><a href="signup.php"><button class="img-circle" name="signup"><h2>SIGN UP</h2></button></a></div>
</div>

<br clear="all" />

    
    <div class="radial-menu">
  <a href="login.php"><div class="menu-item1" title="Login"><i class="fa fa-user fa-2x"></i></div></a>
  <a href="about.php"><div class="menu-item2" title="About"><i class="fa fa-diamond fa-2x"></i></div></a>
  <a href="contact.php"><div class="menu-item3" title="Contact"><i class="fa fa-fax fa-2x"></i></div></a>
  <a href="support.php"><div class="menu-item4" title="Support"><i class="fa fa-envelope-o fa-2x"></i></div></a>
  <a href="#"><div class="mask"><i class="fa fa-home fa-3x"></i></div></a>
</div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script>
$(document).ready(function() {

  var active1 = false;
  var active2 = false;
  var active3 = false;
  var active4 = false;

    $('.radial-menu').on('mousedown touchstart', function() {
    
    if (!active1) $(this).find('.menu-item1').css({'background-color': 'gray', 'transform': 'translate(0px,125px)'});
    else $(this).find('.menu-item1').css({'background-color': 'dimGray', 'transform': 'none'}); 
     if (!active2) $(this).find('.menu-item2').css({'background-color': 'gray', 'transform': 'translate(60px,105px)'});
    else $(this).find('.menu-item2').css({'background-color': 'darkGray', 'transform': 'none'});
      if (!active3) $(this).find('.menu-item3').css({'background-color': 'gray', 'transform': 'translate(105px,60px)'});
    else $(this).find('.menu-item3').css({'background-color': 'silver', 'transform': 'none'});
      if (!active4) $(this).find('.menu-item4').css({'background-color': 'gray', 'transform': 'translate(125px,0px)'});
    else $(this).find('.menu-item4').css({'background-color': 'silver', 'transform': 'none'});
    active1 = !active1;
    active2 = !active2;
    active3 = !active3;
    active4 = !active4;
      
    });
});
</script>
    
</body>

</html>