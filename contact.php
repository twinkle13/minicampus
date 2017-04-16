<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<title>MiniCampus</title>

<!-- demo scripts -->
<link rel="stylesheet" href="css/mini_campus.css">
<link rel="stylesheet" href="css/bootstrap.min.css">
 <link href="css/font-awesome-4.6.1/css/font-awesome.min.css" rel="stylesheet" type="text/css">

 
  <script>
      function initMap() {
        var uluru = {lat: 28.630041, lng: 77.371736};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 15,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC5yJMBy68mqrtl6_JbP29SPMuMkP_FvXI&callback=initMap">
    </script>
 <style>
.ab1,.ab2,.ab3{
   float:left;
   width:30%;
   height:400px;
   margin-left:30px;
   padding-top:20px;
}

.abtUs{
	width:100%;
	height:auto;
}
.abtUs p{
	color:grey;
	font-size:15px;
}
 </style>
</head>

<body>

<div id="well1" class="navbar-fixed-top">

<div class="well11">
<a href="home.php" style="text-decoration:none;"><h2>MiniCampus</h2></a>
</div>
<div class="well12">
<div class="m1">
<a href="home.php" style="text-decoration:none;"><h4>Home</h4></a>
 </div>
<div class="m2">
 <a href="about.php" style="text-decoration:none;"><h4>About Us</h4></a>
 </div>
<div class="m3">
 <a href="#" style="text-decoration:none;"><h4>Contact Us</h4></a>
 </div>
<div class="m4"> 
<a href="support.php" style="text-decoration:none;"> <h4>Support</h4></a>
</div>
</div>
<br clear="all" />

</div>
<div class="big_part">

<div class="container">
<div class="row">
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
<div class="abtUs">
<h3><b>CONTACT US</b></h3>
<p>For more details and answers to your queries, contact us!</p>
<div class="container">
<div class="row">
<div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
<img src="images/14372017_618665644959880_1454026252_n.jpg" class="img-circle" style="width:120px;height:120px;">
<h4 style="color:#0099cc"><b>Bantesh Sharma</b></h4>
<p>Contact : +917042487277       <br>
   Email : erbantesharma@gmail.com  </p>
</div>
<div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
<img src="images/shubham.jpg" class="img-circle" style="width:120px;height:120px;">
<h4 style="color:#0099cc"><b>Shubham Gupta</b></h4>
<p>Contact : 9643155608       <br>
   Email : Shubhamboss32873@gmail.com  </p>
</div>
</div>
</div>
<br />

<div class="container">
<div class="row">
<div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
<img src="images/11889458_873804836038162_8063420347892551456_n.jpg" class="img-circle" style="width:120px;height:120px;">
<h4 style="color:#0099cc"><b>Twinkle Kheterpal</b></h4>
<p>Contact :7988623450        <br>
   Email : twinkle.kheterpal@gmail.com     </p>
</div>
</div>
</div>
<br />
</div>
</div>

<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
<div class="abtUs">
<h3><b>FIND US</b></h3>
<p style="font-size:15px">Jaypee Institute of Information Technology, A-10, sector-62, Noida, INDIA </p>
<br /> 
<div id="map" style=" height:400px;width:100%"></div>
</div>
<br>
</div>
</div>
</div>

<div id="main_5" style="margin-top:0px;">
<center>
<h5 style="padding-top:50px;"><b style="color:white;"><i class="fa fa-copyright fa-fw"></i> MINICAMPUS</b></h5>
</center>
</div>
</div>
</body>
</html>
