<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<title>Home</title>

<!-- demo scripts -->
<link rel="stylesheet" href="css/pro1.css">
<link rel="stylesheet" href="css/mini_campus.css">
<link rel="stylesheet" href="css/common.css">
<link rel="stylesheet" href="css/bootstrap.min.css">
 <link href="css/font-awesome-4.6.1/css/font-awesome.min.css" rel="stylesheet" type="text/css">
 
<script src="script/bootstrap.min.js"></script>
<script src="script/jquery_menu.js"></script> 
<script src="script/jquery.min.js"></script>
<script src="script/jquery.newstape.js"></script>
<link rel="stylesheet" href="css/news.css" />
<script>
    $(function() {
        $('.newstape').newstape();
    });
</script>

<script>
$(document).ready(function(){
    $(".menu").click(function(){
		$("#M1").toggle(1000);
		$("#M2").toggle(1000);
        $("#menu_show1").toggle(1000);
		 $("#menu_show2").toggle(1000);
		  $("#menu_show3").toggle(1000);
		   $("#menu_show4").toggle(1000);
		    $("#menu_show5").toggle(1000);
    });
});


$(document).ready(function(){
    $(".menu1").hover(function(){
		$("#show11").toggle(1000);
		$("#show12").toggle(1000);
    });
});

$(document).ready(function(){
    $(".menu2").hover(function(){
		$("#show21").toggle(1000);
		$("#show22").toggle(1000);
    });
});

$(document).ready(function(){
    $(".menu3").hover(function(){
		$("#show31").toggle(1000);
		$("#show32").toggle(1000);
    });
})

$(document).ready(function(){
    $(".menu4").hover(function(){
		$("#show41").toggle(1000);
		$("#show42").toggle(1000);
    });
})

$(document).ready(function(){
    $(".menu5").hover(function(){
		$("#show51").toggle(1000);
		$("#show52").toggle(1000);
    });
});

</script>


	<script>
			function openDialog() {
				Avgrund.show( "#default-popup" );
			}
			function closeDialog() {
				Avgrund.hide();
			}
		</script>
		
		<link rel="stylesheet" href="css/demo.css">
		<link rel="stylesheet" href="css/avgrund.css">
		<script type="text/javascript" src="script/avgrund.js"></script>

</head>

<body id="gupta" style="height:auto">

<div id="well1" class="navbar-fixed-top">

<div class="well11">
<a href="home.php" style="text-decoration:none;"><h2>MiniCampus</h2></a>
</div>
<div class="well12">
<div class="m1">
<a href="home.php" style="text-decoration:none;"><h4>Home</h4></a>
 </div>
<div class="m2">
 <a href="about.php" style="text-decoration:none;"><h4>About Us</h4></a>
 </div>
<div class="m3">
 <a href="contact.php" style="text-decoration:none;"><h4>Contact Us</h4></a>
 </div>
<div class="m4"> 
<a href="support.php" style="text-decoration:none;"> <h4>Support</h4></a>
</div>
<?php session_start();
if(isset($_SESSION['userid']))  : ?>
      <div class="m5">
        <a href="logout.php" style="text-decoration:none;"><h4><?php echo $_SESSION['username']; ?><i class="fa fa-sign-out fa-fw"></i></h4></a>
      </div>
    <?php endif; ?>
</div>
<br clear="all" />

</div>

<div class="big_part">

<div class="menu_box">

<a href="#">
<div id="menu_show2" class="menu2" align="center">
<h4 id="show21"><i class="fa fa-user fa-fw"></i></h4>
<h4 id="show22" style="display:none;">Profile</h4>
</div>
</a>
<br clear="all">


<div  class="menu" align="center">
<h3 id="M1"><i class="fa fa-bars fa-2x"></i></h3>
<h3 id="M2" style="display:none;"><i class="fa fa-times fa-2x"></i></h3>
 </div>

<a href="compiler.php">
<div  id="menu_show1" class="menu1" align="center">
<h4 id="show11"><i class="fa fa-chain fa-fw"></i></h4>
<h4 id="show12" style="display:none;">Editor</h4>
</div>
</a>
<br clear="all">

<a href="#">
<div  id="menu_show3" class="menu3" align="center">
<h4 id="show31"><i class="fa fa-arrows-alt fa-fw"></i></h4>
<h4 id="show32" style="display:none;">Hubs</h4>
</div>
</a>
<a href="welcome.php">
<div  id="menu_show4" class="menu4" align="center">
<h4 id="show41"><i class="fa fa-users fa-fw"></i></h4>
<h4 id="show42" style="display:none;">Groups</h4>
</div>
</a>
<a href="#">
<div  id="menu_show5" class="menu5" align="center">
<h4 id="show51"><i class="fa fa-file-o fa-fw"></i></h4>
<h5 id="show52" style="display:none;">Assignments</h5>
</div>
</a>
<img src="images/images22.png" style="width:90%;padding-top:100px;">
<br clear="all">

</div>  
<br>
<div>
<!--<div class="gpBx" style="float:left;width:17%;height:275px;margin-top:230px;margin-left:10px;border-radius:5px;position:fixed">
<br>
<button class="btn" style="width:100%;height:50px;background:#339966;color:white;padding:10px 20px;font-size:20px;">Join Group</button> 
 <br>
<button class="btn" style="width:100%;height:50px;background:#339966;color:white;padding:10px 20px;font-size:20px;">Create Group</button> <br>
<button class="btn" style="width:100%;height:50px;background:#339966;color:white;padding:10px 20px;font-size:20px;">Assignments</button> <br>
</div> -->

<div class="banteshBox" style="width:47%;margin-left:270px;"> 

<!--<div class="banteshBox1">
<div class="grpHeading"><b>Groups</b></div>
<a href="#"><div class="grp1">Group-1</div></a>
<a href="#"><div class="grp1">Group-2</div></a>
<a href="#"><div class="grp1">Group-3</div></a>
<a href="#"><div class="grp1" style="padding:30px 60px;font-size:60px;">+</div></a>
</div> 
<br><br> -->
<?php 
require_once('lookup_user_assignment.php');
?>
<div class="banteshBox2">
<div class="grpHeading"><b>Reminder</b> </div>
<div style="overflow-y:auto;height:350px;width:100%">
  <table class="table table-bordered table-hover table-condensed" >
  <thead>
  <tr>
  <th>Assignment</th>
  <th>Submition Date</th>
  </tr>
  </thead>
  <tbody>
  <?php 
  for ($i=0; $i <$c ; $i++) { 
   $cc= count($resjson->result[$i]->assignments_docs);
    
    for ($j=0; $j < $cc; $j++) { 
      if($resjson->result[$i]->assignments_docs[$j]->date->sec>$today->sec)
      {
    ?>  
 
  <tr>
  <td>
  <aside id="default-popup" class="avgrund-popup" style="height:auto">
			<h2>assignment heading</h2>
			<a href="#">download</a><br>
			<a href="#">View</a><br>
			<a href="#">Submit</a><br>
			
			<button onclick="javascript:closeDialog();">Close</button>
		</aside>
  <article class="avgrund-contents">
 <a onclick="javascript:openDialog();"><u style="text-decoration:none;cursor:pointer"><?php echo $resjson->result[$i]->assignments_docs[$j]->assignment_heading; ?></u></a>
  </article>
  </td>
  <td><?php echo date('Y-m-d H:i:s',$resjson->result[$i]->assignments_docs[$j]->date->sec); ?></td>
  </tr>
  <?php
   }}
      
}
 ?>
   
  </tbody>
  </table>
  </div>
  <?php
  date_default_timezone_set("Asia/Kolkata");
  $collection7 = $mongo->getCollection('assignments');
 $collection1 = $mongo->getcollection('users');
 $today=new MongoDate();
 //echo date('Y-m-d H:i:s', $today->sec);
 $diff = 60*60*24*1;

$mongotime = New Mongodate(time()+$diff);
$uid = $_SESSION['userid'];
$user1 = $collection1->findOne(array('_id' => new MongoId($uid)));
$ids = [];
//$cc=count($user1["group_name"]);

foreach ($user1["group_name"] as $id) {
 
  array_push($ids, $id);
 
}
$condition1=array('$and' =>array(array("done"=> array('$exists' => false)),array('groupid' => array('$in'=>$ids)),array( 'date' => array('$gt'=>$today)) ));
$condition2=array('$and' =>array(array("done"=> array('$exists' => true)),array('groupid' => array('$in'=> array($ids))),array( 'date' => array('$gt'=>$today)) ));

$cursor1=$collection7->find($condition1);
$cursor2=$collection7->find($condition2);
$c1=$cursor1->count();
$c2=$cursor2->count();
$t=$c1+$c2;
$percentage=($c1*100)/$t;


  ?>
  <div style="padding-top:20px">
  <div style="color:black;padding-left:40px"><b> Pending assignments: <?php echo $c1; ?></b></div>
   <div class="progress" style="width:50%;margin-left:40px;">

   <div class="progress-bar progress-bar-warning" style="width:<?php echo $percentage."%"; ?>;background-color:#ef762f"><?php echo $percentage; ?></div>
   <div style="color:black"><b> Pending assignments: <?php echo $c1; ?></b></div>
   </div>
   </div>
   <br>
</div>
</div>
<?php 
require_once('connection.php');
?>
 <?php 
$mongo = DBConnection::instantiate();
//$collection = $mongo->getcollection('notices');
//$uid = $_SESSION['userid'];
//print_r($uid);
//$notices1 = $collection->find(array('user_id' => new MongoId($uid)));
//print_r($notices1);

?>

<div class="common_box2" style="float:right;padding-right:20px;float:top;width:29%">
<div class="tap"><div id="triangle-bottomright"></div><p id="tap1">Notices</p></div>


<div id="wrapper" style="margin-top:10px;width:100%">
    <div class="newstape">
    
        <div class="newstape-content">
            <div class="news-block">
                <?php require_once('lookup_user_notices.php'); ?>
                <hr />
            </div>
        </div>
       
    </div>
</div>

</div>

<br clear="all">

</div>


<div id="main_5">
<center>
<h5 style="padding-top:50px;"><b style="color:white;"><i class="fa fa-copyright fa-fw"></i> MINICAMPUS</b></h5>
</center>
</div>

</div>
</body>
</html>