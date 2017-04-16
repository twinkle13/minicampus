



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
  padding-top:2%;
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
<div class="main" style="height:850px;">
<h1 style="color:#339966;font-size:20px;font-family:cursive;margin-left:20px;padding-top:20px;">Welcome to Minicampus <br/> Please signup here...</h1>
<div id="main_form">
 <form id="signup" action="sign_up.php" method="POST">
   <p style="color:white;">  </p> 
 <div class="form-group">
 <ul>
   <?php if(isset($errorMessage)): ?>
    <li><?php echo $errorMessage; ?></li>
    if(isset($message)): ?>
    <li><?php echo $message; ?></li>
  <?php endif ?>
 </ul>
 <label style="color: #009933;font-size:20px;">Name</label>
 <div class=" form-inline">
 <input type="text" name="fname" class="form-control" placeholder="first name" style="width:225px;height:45px;" />
  <input type="text" name="lname" class="form-control" placeholder="last name" style="width:225px;height:45px;" />
  </div>
 </div>
  <div class="form-group">
 <label style="color: #009933;font-size:20px;">Member Type</label>
   <select name="membertype" class="form-control" style="width:450px;height:45px;">
   <option selected>Select</option>
   <option>Student</option>
   <option>Teacher</option>
   </select>
 </div>
  <div class="form-group">
 <label style="color: #009933;font-size:20px;">Email Id</label>
 <input type="email" name="email" class="form-control" placeholder="example@gmail.com" style="width:450px;height:45px;" />
 </div>
 <div class="form-group">
 <label style="color: #009933;font-size:20px;">User Name</label>
 <input type="text" name="username" class="form-control" placeholder="eg. twinkle123" style="width:450px;height:45px;" />
 </div>
 <div class="form-group">
  <label style="color: #009933;font-size:20px;">Password</label>
 <input type="password" name="password" class="form-control"  style="width:450px;height:45px;"  />
 </div>
 <br />
 <button class="btn btn-success" style="width:300px;margin-left:75px;" name="signin" value="Sign Up">Sign Up</button>
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