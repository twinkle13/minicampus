<?php
session_start();
date_default_timezone_set("Asia/Kolkata");
?>
<div style="padding-top:150px;padding-left:80px">

<?php 
require_once('connection.php');
$mongo = DBConnection::instantiate();
 $collection7 = $mongo->getCollection('assignments');
 $collection1 = $mongo->getcollection('users');
 $today=new MongoDate();
 //echo date('Y-m-d H:i:s', $today->sec);
$uid = $_SESSION['userid'];
$user1 = $collection1->findOne(array('_id' => new MongoId($uid)));
$ids = array();
$cc=count($user1["group_name"]);

foreach ($user1["group_name"] as $id) {
 
  array_push($ids, $id);
  # code...
}

$group_details = $collection7->find(array('groupid' => array('$in'=> $ids)))->count();
echo $group_details;
var_dump($ids);
$condition1=array('$and' =>array(array("done"=> array('$exists' => false)),array('groupid' => array('$in'=>$ids)),array( 'date' => array('$gt'=>$today)) ));
$condition2=array('$and' =>array(array("done"=> array('$exists' => true)),array('groupid' => array('$in'=> array($ids))),array( 'date' => array('$gt'=>$today)) ));

$cursor1=$collection7->find($condition1);
$cursor2=$collection7->find($condition2);
$c1=$cursor1->count();
$c2=$cursor2->count();
$t=$c1+$c2;
echo $c1;
echo $c2;
//$percentage=($c1*100)/$t;

//$cursor = $collection7->find(array('groupid' => array('$in'=> array($id))));


 $diff = 60*60*24*1;

$mongot = New Mongodate(time()+$diff);
$condition=array('$and' =>array(array('date' => array('$lt'=>$mongot)),array("done"=> array('$exists' => false)),array('groupid' => array('$in'=> array($id))),array( 'date' => array('$gt'=>$today)) ));
$cursor=$collection7->find($condition);
//$cursor=$cursor->sort(array('date' => -1));
if(isset($cursor))
{
	
	foreach ($cursor as $usersn) {
		var_dump(date('Y-m-d H:i:s',$usersn['date']->sec));
	// write code to mail the user
		/*
	echo $usersn['assignment_heading'];
	
	echo $usersn['assignment_heading'];
	echo nl2br("\n");
*/
}

}
 /*


$condition=array('$and' =>array(array('date' => array('$lt'=>$mongotime)),array( 'date' => array('$gt'=>$today)) ));




$all_a =array('date' => array('$gt'=>$today));
$all_a_done=array('date' => array('$gt'=>$today) ,"done"=> array('$exists' => true));
$all_a_notdone=array('date' => array('$gt'=>$today) ,"done"=> array('$exists' => false));
$a_less_than_oneday_date=array('date' =>array('$gt'=>$today),'date' => array('$lt'=>$mongotime) ,"done"=> array('$exists' => true));

//$usersnotisfy =$collection->find( $condition );

// ///////////////////////////////////////////////////////////////////////////

*/
?>
</div>