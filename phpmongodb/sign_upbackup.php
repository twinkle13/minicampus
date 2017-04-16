
<?php
require 'vendor/autoload.php';
 require('dbconnection.php');
 require('session.php');
 echo "string";

   if(isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['membertype'])&& isset($_POST['email'])&& isset($_POST['username'])&& isset($_POST['password']))
  {   
     $fname = $_POST['fname'];
     $lname = $_POST['lname'];
     $membertype= $_POST['membertype'];
     $email= $_POST['email'];
    $username = $_POST['username'];
     $password= $_POST['password'];

     
     if(!empty($fname)&&!empty($lname) &&!empty($member)&&!empty($email)&&!empty($username)&&!empty($password)) {
      #$document = array('fname' => $fname, 'lname' => $lname,'membertype' => $membertype, 'email'=> $email, 'username' => $username,'password' => md5($password));

     	$document= array(); 
     $document['fname'] = $_POST['fname'];
     $document['lname'] = $_POST['lname'];
     $document['membertype']= $_POST['membertype'];
     $document['email']= $_POST['email'];
    $document['username'] = $_POST['username'];
     $document['password']= $_POST['password'];


      $mongo = DBConnection::instantiate();
      $collection = $mongo->getCollection('users');
      echo "string";
      $collection->insert($document);

}
 else{ 
        $errorMessage="please fill the required info.";
      
        }

  $message= 'sign up successfully';
  echo " sign up";
  var_dump($document['fname']);

 # header('location:homepage.php');
  #          exit;
      
     }
   
          
      ?>
      