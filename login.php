<?php

  // include header file
 require_once("header.php");
?>
<?php
	session_start();
	if(isset($_SESSION['userid'])){
		header('Location: pro1.php');
	}
?>
<?php
	require('connection.php');
	//Login user
	$mongo = DBConnection::instantiate();
  	$collection = $mongo->getCollection('users');

	if($_SERVER["REQUEST_METHOD"] == "POST") {
		$username = $_POST['username'];
		$dob = $_POST['dob'];
		$password = md5($_POST['password']);

  		$user = $collection->findOne(array('username'=> $username, 'password' => $password));

  		if(isset($user)) {
  			$_SESSION['userid'] = $user['_id'];
  			ob_start();
  			echo $_SESSION['userid'];
  			$_SESSION['userid']= ob_get_clean();
  			$_SESSION['username'] = $user['username'];
  			$_SESSION['email'] = $user['email'];
  			$_SESSION['member_type']=$user['member_type'];
  			header('Location: pro1.php');
  		} else {
  			header('Location: login.php');
  		}
	}

	if($_SERVER["REQUEST_METHOD"] == "GET['login']") {
		if(($_GET["key"])=="te")
		{
			$member_type = $_GET["key"];
		}
	    else
	    {
	    	$member_type = $_GET["key"];
	    }
	}

?>
<div class="big_part"  id="login_form" style="margin-top:0px">
<div class="main" style="height:650px;background-image:url(images/clgstdnt3.jpg);">
	<div id="main_form" style="margin-left:0%;
  padding-top:10%;">
		<form action="login.php" method="POST">
			<div class="form-group">
			 	<label style="color: #009933;font-size:20px;">Username</label>
			 	<center><input type="text" name="username" class="form-control" placeholder="username" style="width:250px;height:45px;" /></center>
			</div>
			<div class="form-group">
			  	<label style="color: #009933;font-size:20px;">Password</label>
			 	<center><input type="password" name="password" class="form-control"  style="width:250px;height:45px;"  /></center>
			</div>
		 	<br/>
		 	<input type="submit" class="btn btn-success" id="btn2" name="login" value="Login" >
		</form>
		<br>

   		<a href='/minicampus/apis/facebook/fb_authorize.php?member_type=<?php echo $member_type; ?>'>
			<img src = "fb.png" alt="facebook login" style = "width:200px;height:70px;padding-right:5px">
		</a>


		<a href='apis/google/google_authorize.php?member_type=<?php echo $member_type; ?>'>
		  <img src = "google.png" alt="google login" style = "width:200px;height:60px;padding-left:5px">
		</a>

		</div>
		</div>
		</div>




<?php
// include footer file
    require_once("footer.php");
?>
