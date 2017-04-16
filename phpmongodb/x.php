<button id="login-submit" name="login" class="btn btn-success" style="width:300px;margin-left:75px;">Log in</button>


<form id="login" action="loginstudent.php" method="POST" accept-charset="utf-8">
  <p style="color:white"> 
  <?php require"log_in.php"; ?> </p>
<div class="form-group">
 <label style="color: #009933;font-size:20px;">Username</label>
 <input type="text" name="username" class="form-control" placeholder="eg. twinkle" style="width:450px;height:45px;" />
 </div>
 <div class="form-group">
  <label style="color: #009933;font-size:20px;">Password</label>
 <input type="password" name="password" class="form-control"  style="width:450px;height:45px;"  />
 </div>
 <br />
 <input id="login-submit" name="login"                     tabindex="3" type="submit"                     value="Log in" />
 
 </form>





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
  