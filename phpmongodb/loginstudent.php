<?php
require 'vendor/autoload.php';
 $action = (!empty($_POST['login']) &&($_POST['login'] === 'Log in')) ? 'login': 'show_form'; 
 switch($action)  {
       case 'login': 
       		require('session.php');
       		require('user.php');
       		$user = new User();
       		$username = $_POST['username'];
       		$password = $_POST['password'];
       		if ($user->authenticate($username, $password)) {
            echo "password matched";
       		  header('location:home.php');
       		  exit;
       		} else {
       			$errorMessage = "Username/password did not match.";
       			break;
       			 }
       	case 'show_form':	
       	default:
       	$errorMessage = NULL;
      } 
      ?>





<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<title>Student login page</title>

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

<div id="contentarea" class="navbar-fixed-top">

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
 <form id="login" action="loginstudent.php" method="post"               accept-charset="utf-8">  
             <ul>                <?php if(isset($errorMessage)): ?>                  <li><?php echo $errorMessage; ?></li>                <?php endif ?>                <li>                <label>Username </label>                <input class="textbox" tabindex="1"                    type="text" name="username"                    autocomplete="off"/>                </li>                <li>                  <label>Password </label>                  <input class="textbox" tabindex="2"                     type="password" name="password"/>                </li>                <li>                  <input id="login-submit" name="login"                     tabindex="3" type="submit"                     value="Log in" />                </li>                <li class="clear"></li>              </ul>            </form> 
 
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