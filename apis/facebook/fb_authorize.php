<!DOCTYPE html>
<html>
<head><meta content="text/html;charset=utf-8" http-equiv="Content-Type">
<meta content="utf-8" http-equiv="encoding">
	<title>facebook Token</title>
	 
</head>
<body>

<?php
	if($_SERVER["REQUEST_METHOD"] == "GET") {
	    if(($_GET["key"])=="te")
	    {
	      $member_type = "Teacher";
	    }
	    else
	    {
	      $member_type = "Student";
	    }
	}
	session_start();

	$base = $_SERVER['DOCUMENT_ROOT'];
	require_once("$base/minicampus/connection.php");
	require_once("$base/minicampus/apis/facebook/mysrc/config.php");
	echo $_SESSION['userid'];
	if(isset($_SESSION['userid'])){
		header('Location: /minicampus/welcome.php');
	}
	else if(isset($_GET['fbTrue']) AND isset($_GET['code'])){
		include "$base/minicampus/apis/facebook/mysrc/functions.php";

	    $token_url = "https://graph.facebook.com/oauth/access_token?"
	       . "client_id=".$config['App_ID']."&redirect_uri=" . urlencode($config['callback_url'])
	       . "&client_secret=".$config['App_Secret']."&code=" . $_GET['code']; 

		$response = getHTML($token_url);
		date_default_timezone_set('Asia/Kolkata');
		$time = date('Y-m-d H:i:s');
		$params = null;
		parse_str($response, $params);

		// print_r($params);

		$graph_url = "https://graph.facebook.com/me?fields=email,id,name&access_token=" . $params['access_token'];
		$user = json_decode(getHTML($graph_url));
		$mongo = DBConnection::instantiate(); 
  		$collection = $mongo->getCollection('users');
  		$emailExist = $collection->findOne(array('email'=> $user->email));
        if(!$emailExist) {
            $user1 = array(
            "username"=>$user->name,
            "facebook_id"=>$user->id,
            "email"=>$user->email
			);
		try{      
            $collection->insert($user1);    
          } 
          catch (MongoCursorException $e) {      
            die($e->getMessage());    
          }
        } else {
        	if(isset($emailExist['member_type']) && $emailExist['member_type'] == $member_type) {
	        	if(isset($emailExist['facebook_id']) && $emailExist['facebook_id'] == $user->id) {

	          } else {
	            try{  
	                  
	                $collection->update(array("email"=>$userData->email), array('$set'=>array("facebook_id"=>$user->id)));  
	            } 
	            catch (MongoCursorException $e) {      
	              die($e->getMessage());    
	            }
	          } 
	        } else {
	        	header('Location: /minicampus/login.php?member_type='.$member_type);
	        }
        }
       
		$_SESSION['userid'] = $user->id;
		$_SESSION['username'] = $user->name;
		$_SESSION['email'] = $user->email;
		header('Location: /minicampus/welcome.php');
	}
 	else {
		$id = $config['App_ID'];
      	$cb = $config['callback_url'];
      	$fb_uri = "https://www.facebook.com/dialog/oauth?client_id=$id&redirect_uri=$cb&scope=email";
      	header("Location: $fb_uri");
	}

?>


</body>
</html>