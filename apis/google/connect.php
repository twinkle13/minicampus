<?php
//connect to mongodb
$m = new MongoClient();

echo "connection to database succesfully";
//select a database

$db = $m->mydb;
echo "database mydb selected";

?>
 
