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
date_default_timezone_set('Asia/Kolkata');
// $base = $_SERVER['DOCUMENT_ROOT'];

require_once "google-api-php-client/src/Google/autoload.php";
// include_once "$base/apis/google/mysrc/functions.php";


$client = new Google_Client();
$client->setAuthConfigFile('client_secret.json');
$client->setRedirectUri('http://' . $_SERVER['HTTP_HOST'] . '/minicampus/apis/google/google_authorize.php');

$client->addScope('https://www.googleapis.com/auth/userinfo.profile');
$client->addScope('https://www.googleapis.com/auth/userinfo.email');
// $client->setApprovalPrompt('force');

if(isset($_SESSION['userid'])){
  header('Location: /minicampus/pro1.php');
}
else if (! isset($_GET['code'])) {
  $auth_url = $client->createAuthUrl();
  header('Location: ' . filter_var($auth_url, FILTER_SANITIZE_URL));
} 
else
 {
  $client->authenticate($_GET['code']);
  $token = $client->getAccessToken();
  $response = json_decode($token); 
  $access_token = $response->access_token;
  $userDetails = file_get_contents('https://www.googleapis.com/oauth2/v1/userinfo?access_token='.$access_token);
  $userData = json_decode($userDetails);

   $mongo = DBConnection::instantiate(); 
      $collection = $mongo->getCollection('users');
      $emailExist = $collection->findOne(array('email'=> $userData->email));
      
      if($emailExist){
          if(isset($emailExist['member_type']) && $emailExist['member_type'] == $member_type) {
            if(isset($emailExist['gmail_id']) && $emailExist['gmail_id'] == $userData->id) {

            } else {
              try{  
                    
                  $collection->update(array("email"=>$userData->email), array('$set'=>array("gmail_id"=>$userData->id)));  
              } 
              catch (MongoCursorException $e) {      
                die($e->getMessage());    
              }
            } 
          } else {
            $redirect_uri = '/minicampus/login.php?member_type='.$member_type;
            header('Location: ' . filter_var($redirect_uri, FILTER_SANITIZE_URL));
          }     
        } else {

          $user1 = array(
                "username"=>$userData->name,
                "gmail_id"=>$userData->id,
                "email"=>$userData->email,
                "member_type" => $member_type
          );
        try{      
                $collection->insert($user1);    
              } 
              catch (MongoCursorException $e) {      
                die($e->getMessage());    
              }
        }
  $gEmail = $userData->email;

  $_SESSION['userid'] = $userData->id;
  $_SESSION['username'] = $userData->name;
  $_SESSION['email'] = $gEmail;

  $redirect_uri = '/minicampus/pro1.php';
  header('Location: ' . filter_var($redirect_uri, FILTER_SANITIZE_URL));
}
?>