<?php
  require('session.php');
  require('user.php'); 
  $user = new User();
  if (!$user->isLoggedIn()){
     header('location: loginstudent.php');
     exit;
 }
 ?>
 <!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<title>Student login page</title>

<!-- demo scripts -->
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="bootstrap.min.css">
<link href="font-awesome-4.6.1/css/font-awesome.min.css" rel="stylesheet" type="text/css">
 <title>Welcome <?php echo $user->username; ?></title>
</head> 
<body>
 <div id="contentarea">
 <div id="innercontentarea">
 <a style="float:right;" href="logout.php">Log out</a>
  <h1>Hello <?php echo $user->username; ?></h1>
  </div>
  </div>
  </body>
  </html>
  