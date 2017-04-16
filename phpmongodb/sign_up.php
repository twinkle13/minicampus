
<?php
require 'vendor/autoload.php';
require('dbconnection.php'); 
require('session.php');
       		require('user.php');
 $mongo = DBConnection::instantiate(); 
  $collection = $mongo->getCollection('users'); 
 echo "string";

   if(isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['membertype'])&& isset($_POST['email'])&& isset($_POST['username'])&& isset($_POST['password']))
  {   
     $fname = $_POST['fname'];
     $lname = $_POST['lname'];
     $membertype= $_POST['membertype'];
     $email= $_POST['email'];
    $username = $_POST['username'];
     $password= $_POST['password'];

     
     if(!empty($fname)&&!empty($lname) &&!empty($membertype)&&!empty($email)&&!empty($username)&&!empty($password)) {
      $users = array('fname' => $fname, 'lname' => $lname,'membertype' => $membertype, 'email'=> $email, 'username' => $username,'password' => md5($password));


echo $fname;
 
            try{      $collection->insert($users);    } 
            catch (MongoCursorException $e) {      die($e->getMessage());    }  

}
 else{ 
        echo "please fill the required info.";
      
        }
  echo " sign up";
  $user = new User();
if ($user->authenticate($username, $password)) {
  header('location:home.php');

            exit;
      }
     }
   
      
