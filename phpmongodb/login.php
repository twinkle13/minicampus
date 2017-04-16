<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<title>MiniCampus</title>

<!-- demo scripts -->
<link rel="stylesheet" href="mini_campus.css">
<link rel="stylesheet" href="bootstrap.min.css">
 <link href="font-awesome-4.6.1/css/font-awesome.min.css" rel="stylesheet" type="text/css">

 <style>
 #main_form{
  margin-left:35%;
  padding-top:10%;
 }
 .main{
   background-image:url(clgstdnt3.jpg);
 }

 </style>
</head>

<body>

<div id="well1" class="navbar-fixed-top">

<div class="well11">
<a href="mini_campus.html" style="text-decoration:none;"><h2>MiniCampus</h2></a>
</div>
<div class="well12">
<div class="m1">
<a href="mini_campus.html" style="text-decoration:none;"><h4>Home</h4></a>
 </div>
<div class="m2">
 <a href="about.html" style="text-decoration:none;"><h4>About Us</h4></a>
 </div>
<div class="m3">
 <a href="#" style="text-decoration:none;"><h4>Contact Us</h4></a>
 </div>
<div class="m4"> 
<a href="support.html" style="text-decoration:none;"> <h4>Support</h4></a>
</div>
</div>
<br clear="all" />

</div>

<div class="big_part">
<div class="main" style="height:650px;">
<div id="main_form">
 <form action="login.php" method="POST">
  <p style="color:white"> <?php require"log_in.php"; ?> </p>
 <div class="form-group">
 <label style="color: #009933;font-size:20px;">Username</label>
 <input type="text" name="username" class="form-control" placeholder="eg. twinkle" style="width:450px;height:45px;" />
 </div>
 <div class="form-group">
  <label style="color: #009933;font-size:20px;">Password</label>
 <input type="password" name="pass" class="form-control"  style="width:450px;height:45px;"  />
 </div>
 <br />
 <button class="btn btn-success" style="width:300px;margin-left:75px;">Log in</button>
 </form>
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