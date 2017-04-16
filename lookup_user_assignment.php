<?php  
date_default_timezone_set("Asia/Kolkata");
require_once('connection.php');  
$mongo = DBConnection::instantiate();  
$collection5 = $mongo->getCollection('users');
$ops =
array(
     array( '$unwind'=> '$group_name'),
    array(
        '$lookup' => array(
            'from' => 'assignments',
            'localField' => 'group_name',
            'foreignField' => 'groupid',
            'as' => 'assignments_docs'
        )),
        array('$match'=> array('assignments_docs'=> array( '$ne'=> []),'_id'=>new MongoId($_SESSION['userid']) )),
    array('$sort'=>array('assignments_docs.date' => -1 ))
    
        
    
);
$values = $collection5->aggregate($ops);

$res=json_encode($values);
$resjson=json_decode($res);
$c=count($resjson->result);







 
    

//echo $resjson->result[0]->name;
//echo nl2br("\n".$resjson->result[0]->notices_docs[0]->notice_heading);
//echo nl2br("\n".$resjson->result[0]->notices_docs[1]->notice_heading);

// echo nl2br("\n");



//var_dump($values['result']);
/*$results=$data['result'];
for($results as $result)
{
	echo json_encode($json, JSON_PRETTY_PRINT);
   echo $user['_id']." ".$user['name'];
}
echo " ";
var_dump($data);
*/
?>
