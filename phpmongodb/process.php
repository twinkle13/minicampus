<?php
error_reporting(0);
require_once 'HackerRank-php/HackerRank.php';
$api_key = "hackerrank|941101-1028|3e78b5026f074961ce5a966f57842c729534989a";
$input = "[\"Test 1\", \"Test 2\"]";
$format = "JSON";
$callback_url = "https://testing.com/response/handler";
$wait = "true";


$subStatus = array(
    0 => 'Success',
    1 => 'Compiled',
    3 => 'Running',
    11 => 'Compilation Error',
    12 => 'Runtime Error',
    13 => 'Timelimit exceeded',
    15 => 'Success',
    17 => 'memory limit exceeded',
    19 => 'illegal system call',
    20 => 'internal error'
);

$error = array(
    'status' => 'error',
    'output' => 'Something went wrong :('
);
if ( isset( $_POST['process'] ) && $_POST['process'] == 1 ) {
    $lang = isset( $_POST['lang'] ) ? intval( $_POST['lang'] ) : 1;
    $input = trim( $_POST['input'] );
    $code = trim(stripslashes( $_POST['source'] ));

    $api_client = new HackerRank\APIClient();
    $checker_api = new HackerRank\CheckerAPI($api_client);
    $response = $checker_api->submission($api_key, $code, $lang, $input, $format, $callback_url, $wait);
    $output=$response->result->stdout;

    /* //if submission is OK, get the status
    if ( $result['error'] == 'OK' ) {
        $status = $client->getSubmissionStatus( $user, $pass, $result['link'] );
        if ( $status['error'] == 'OK' ) {

            //check if the status is 0, otherwise getSubmissionStatus again
            while ( $status['status'] != 0 ) {
                sleep( 3 ); //sleep 3 seconds
                $status = $client->getSubmissionStatus( $user, $pass, $result['link'] );
            }

            //finally get the submission results
            $details = $client->getSubmissionDetails( $user, $pass, $result['link'], true, true, true, true, true );
            if ( $details['error'] == 'OK' ) {
                //print_r( $details );
                if ( $details['status'] < 0 ) {
                    $status = 'waiting for compilation';
                } else {
                    $status = $subStatus[$details['status']];
                }

                $data = array(
                    'status' => 'success',
                    'meta' => "Status: $status | Memory: {$details['memory']} | Returned value: {$details['status']} | Time: {$details['time']}s",
                    'output' => htmlspecialchars( $details['output'] ),
                    'raw' => $details
                );
                
                if( $details['cmpinfo'] ) {
                    $data['cmpinfo'] = $details['cmpinfo'];
                }
                
                echo json_encode( $data );
            } else {
                //we got some error :(
                //print_r( $details );
                echo json_encode( $error );
            }
        } else {
            //we got some error :(
            //print_r( $status );
            echo json_encode( $error );
        }
    } else {
        //we got some error :(
        //print_r( $result );
        echo json_encode( $error );
    }
}

$action = (!empty($_POST['submit']) &&($_POST['submit'] === 'Submit')) ? 'submit': 'show_form'; 
if($action)  {
       
            //require('session.php');
            //require('user.php');
            //echo htmlspecialchars($_POST['source']);
            //echo htmlspecialchars($_POST['lang']);
            
try {
    
    //var_dump($response);

    //echo json_encode($response);

$code=$_POST['source'];
$lang = $_POST['lang'];

header('location:editor.php');

//foreach ($created_at as $key => $value) {
    //echo $value;
    # code...
//}
//echo $created_at;
//var_dump($response);
//echo "-----------------------------------------------------------------------";
    
} catch (Exception $e) {
    echo 'Caught exception: ', $e->getMessage(), "\n";
}
}
else echo "cant connect ";
?>
*/
