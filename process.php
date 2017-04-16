<?php
error_reporting(0);
require_once 'HackerRank-php/HackerRank.php';
$api_key = "hackerrank|941101-1028|3e78b5026f074961ce5a966f57842c729534989a";
$lang=1;
$code='#include <stdio.h>

int main()
{
   char str1[20], str2[30];
   printf("Enter name: ");
   scanf("%s", str1);
   
   return(0);
}';
$input =  "[\"test 1\"]";
$format = "JSON";
$callback_url = "https://testing.com/response/handler";
$wait = "true";

$error = array(
    'status' => 'error',
    'output' => 'Something went wrong :('
);

$code=$_POST["source"];
$lang=$_POST["lang"];
$inputtext=$_POST["input"];
if($inputtext!="")
{
$input="[\"$inputtext\"]";
}


try {
    $api_client = new HackerRank\APIClient();
    $checker_api = new HackerRank\CheckerAPI($api_client);
    $response = $checker_api->submission($api_key, $code, $lang, $input, $format, $callback_url, $wait);
    //sleep(2);
    echo json_encode($response);
} catch (Exception $e) {
    echo 'Caught exception: ', $e->getMessage(), "\n";
}

       
?>