<?php  
require_once('connection.php');  
$mongo = DBConnection::instantiate();  
$collection4 = $mongo->getCollection('users');
 // $collection1 = $mongo->getCollection('notices');
//$cursor=$collection1->find(array('_id' => 1, ))->sort( array( 'notice_heading'=> -1 ) );
//$cursor->rewind();



$ops =
array(
     array( '$unwind'=> '$group_name'),
    array(
        '$lookup' => array(
            'from' => 'notices',
            'localField' => 'group_name',
            'foreignField' => 'group_id',
            'as' => 'notices_docs'
        )),
        array('$match'=> array('notices_docs'=> array( '$ne'=> []),'_id'=>new MongoId($_SESSION['userid'])) ),
    array('$sort'=>array('notices_docs.date' => -1 ))
    
        
    
);/*
$cursor = $collection->find(array(
    'name' => array('$in' => array('Joe', 'Wendy'))
));
*/


$values = $collection4->aggregate($ops);
$cursor=$values;

$res=json_encode($values);
$resjson=json_decode($res);
$c=count($resjson->result);


//$c=$c-1;date('Y-m-d H:i:s',$usersn['deadline']->sec)



for ($i=0; $i <$c ; $i++) { 
   $cc= count($resjson->result[$i]->notices_docs);
    
    for ($j=0; $j < $cc; $j++) { 
        ?>
         <h3 style="color:#7aa76d"><b><center><?php echo nl2br("\n".$resjson->result[$i]->notices_docs[$j]->notice_heading);?></center></b></h3>
         <small><?php
         echo "(".date('Y-m-d H:m:i',$resjson->result[$i]->notices_docs[$j]->date->sec).")";
         echo nl2br("\n".$resjson->result[$i]->notices_docs[$j]->notice_text);
          ?></small><?php
         
     } 
     echo nl2br("\n");
}
 

    

//echo $resjson->result[0]->name;
//echo nl2br("\n".$resjson->result[0]->notices_docs[0]->notice_heading);
//echo nl2br("\n".$resjson->result[0]->notices_docs[1]->notice_heading);

echo nl2br("\n");



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
