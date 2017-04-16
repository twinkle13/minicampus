<?php
require 'vendor/autoload.php';
try{ 
$client= new Mongo();

$db=$client->mini_campus;
$collection_student= new MongoCollection($db,'students');
$collection_teacher= new MongoCollection($db,'teachers');

	 
}catch(MongoConnectionException $e) {   
               //handle connection error   
                die($e->getMessage());  }

	  if(isset($_POST['username']) &&isset($_POST['pass']))
	   {
		 $username= $_POST['username'];
         
         $pass= $_POST['pass'];	
         $user = $db->$collection_student->findOne(array('username'=> $username, 'password'=> $pass));
         if($user){?>

         	<script> window.alert("login Sucssfully!!") ;</script><?php 
			header("Location:mini_campus.html");
		   
		   }
		   else{
			echo"Wrong Username OR Password.";
			echo "$user";
		    }

   	 }