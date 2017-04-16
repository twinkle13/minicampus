<?php 
require 'vendor/autoload.php';
/*
$client= new MongoClient();

$companydb=$client->companydb;
$result1=$companydb->createCollection('signup');
var_dump($result1);
*/

try{    $mongo     = new Mongo(); //create a connection to MongoDB
    $databases = $mongo->listDBs(); //List all databases
        echo '<pre>'; 
           print_r($databases); 
              $mongo->close();  } 
              catch(MongoConnectionException $e) {   
               //handle connection error   
                die($e->getMessage());  } 
?>