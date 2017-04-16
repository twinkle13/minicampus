<?php  require('dbconnection.php');  $mongo = DBConnection::instantiate();  $collection = $mongo->getCollection('users'); 
$x="twinklet";
 $users =          
  array( 'name' => $x,  'username' => 'twinks',  'password' => md5('twinks')); 
         #foreach($users as $user)  { 
            try{      $collection->insert($users);    } 
            catch (MongoCursorException $e) {      die($e->getMessage());    }  
        #}
  echo 'Users created successfully';




<?php 
 require('dbconnection.php'); 
 $mongo = DBConnection::instantiate(); 
  $collection = $mongo->getCollection('users'); 
$x="twinklet";
$fname = $_POST['fname'];
     $lname = $_POST['lname'];
     $membertype= $_POST['membertype'];
     $email= $_POST['email'];
    $username = $_POST['username'];
     $password= $_POST['password'];
 $users =          
  array( 'fname' => $fname,  'username' => $username,  'password' => md5($password)); 
         #foreach($users as $user)  { 
            try{      $collection->insert($users);    } 
            catch (MongoCursorException $e) {      die($e->getMessage());    }  
        #}
  echo 'Users created successfully';
