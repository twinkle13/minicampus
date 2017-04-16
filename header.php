
<?php session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<title>MiniCampus</title>

<!-- demo scripts -->
<link rel="stylesheet" href="css/mini_campus.css">
 <link rel="stylesheet" href="css/bootstrap.min.css"> 
<link href="css/font-awesome-4.6.1/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<!-- <script src="script/jquery.min.js"></script> -->
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
		<?php if(isset($_SESSION['userid']))  : ?>
			<div class="m5">
				<a href="logout.php" style="text-decoration:none;"><h4><?php echo $_SESSION['username']; ?><i class="fa fa-sign-out fa-fw"></i></h4></a>
			</div>
		<?php endif; ?>
	</div>
	<br clear="all" />
</div>
