<?php
//echo "welcome to group";
include_once("header.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<title>Home</title>

<!-- demo scripts -->
<link rel="stylesheet" href="css/mini_campus.css">
<link rel="stylesheet" href="css/common.css">
<link rel="stylesheet" href="css/bootstrap.min.css">
 <link href="font-awesome-4.6.1/css/font-awesome.min.css" rel="stylesheet" type="text/css">
 
 
<script src="jquery.min.js"></script>
<script src="jquery.newstape.js"></script>
<link rel="stylesheet" href="css/news.css" />
<script>
    $(function() {
        $('.newstape').newstape();
    });

  
function fun1(){
  document.getElementById("news-form").style.display="block";
  document.getElementById("event-form").style.display="none";
}
function fun2(){
  document.getElementById("news-form").style.display="none";
  document.getElementById("event-form").style.display="block";
}

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

</head>

<body>



<div class="big_part">

<div class="menu_box">

<a href="pro1.php">
<div id="menu_show2" class="menu2" align="center">
<h4 id="show21"><i class="fa fa-chain fa-fw"></i></h4>
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
<h4 id="show11"><i class="fa fa-user fa-fw"></i></h4>
<h4 id="show12" style="display:none;">Editor</h4>
</div>
</a>
<br clear="all">

<a href="#">
<div  id="menu_show3" class="menu3" align="center">
<h4 id="show31"><i class="fa fa-arrows-alt fa-fw"></i></h4>
<h4 id="show32" style="display:none;">Assignments</h4>
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
<h4 id="show51"><i class="fa fa-cutlery fa-fw"></i></h4>
<h5 id="show52" style="display:none;">HUb</h5>
</div>
</a>
<br clear="all">

</div>  
<br><br><br>
<div>

<div class="common_box1" style="width:45%">
<div class="welcome_box" align="center">
<p><span style="font-family:cursive;font-size:30px;">Welcome !</span> <?php  require("groupr1.php");
?> </p>
</div>
<div class="create_box1" onclick="fun1()">
<div class="news_box" align="center">
<p>Create Notice</p>
</div>
</div>
<div class="create_box2" onclick="fun2()">
<div class="event_box" align="center">
<p>Assignments</p>
</div>
</div>



 <?php 
 require("groupr2.php");

?> 
<div id="news-form">
<form style="margin:10px;" method="post"> 
<input type="text" name="notice_heading" placeholder="Notice Heading" class="form-control" value="<?php if(isset($val_heading)){echo $val_heading;} ?>" />  <br>
 <div class="error1"><?php if(isset($err_heading)){ echo $err_heading;} ?></div>
<label>Notice</label>
<textarea rows="3" cols="15" name="notice_text" class="form-control" value="<?php echo $val_text; ?>"></textarea><br>
 <div class="error1"><?php if(isset($err_text)){echo $err_text;} ?></div>
<button class="btn" style="background:#339966;color:white;font-size:20px;" type="submit" name="submit_noice">Submit</button>
</form> 
</div>
<?php
require("groupr4.php");
?>
<div id="event-form" style="display:none;">
<form style="margin:10px;" method="post"> 
<input type="text" name="assignment_heading" placeholder="Assignment Heading" class="form-control" value="<?php //echo $val_assignmentheading; ?>" />  <br>
 <div class="error1"><?php if(isset($err_assignmentheadingr)){echo $err_assignmentheading;} ?></div>
<label>Assignment</label>
<div class="form-group">
              <input type="file" name="file_name" />
            </div>
 <div class="error1"><?php //echo $err_assignment;?></div>
 <input type ="date" name = "deadline"  placeholder = "deadline"class = "form-control"?><br>
<button class="btn" style="background:#339966;color:white;font-size:20px;">Submit</button>
</form>
</div>

 </div> 


<div class="common_box2" style="width:33%">
<div class="tap1"><div id="triangle-bottomright"></div><p id="tap1">Notices</p></div>

<?php
  $collection = $mongo->getCollection('notices');
  $counting = $collection->count();
  //echo $counting ;
  //$count=0;
print_r( $_SESSION['g_id']);
$group1_id = $_SESSION['g_id'];
print_r("$group1_id");


//$notes = $collection->find();
$notes = $collection->find(array('group_id' => new MongoId($group1_id)));



?>

<div id="wrapper" style="margin-top:10px;">

    <div class="newstape">
        <div class="newstape-content">


        <?php  
foreach($notes as $document){
   $notice_heading = $document["notice_heading"];
    $text = $document["notice_text"]; 
    $date=$document["date"];
?>  
            <div class="news-block">

                <h3><?php echo $notice_heading ; ?></h3> <p style="float:right"> <?php echo $date ?></p>
                 <p class="text-justify">
                   <?php echo $text ; ?>
                </p>
               <p> <?php echo "(" ;print_r($_SESSION['group_name']); echo ")";
                 ?> </p>
                
        </div>
        <?php } ?>
    </div>
</div>

</div>
</div>
<br clear="all"> 
</div>
<div class="view_section1">


</div>
</div>

 <div class="common_box3" style="padding-top:50px">
<div class="tap"><div id="triangle-bottomright"></div><p id="tap1">Assignments</p></div>
<?php
  $collection = $mongo->getCollection('assignments');
  $condition=array('group_id' =>$_SESSION['g_id'] , );
  $counting = $collection->count();
  //echo $counting ;
  //$count=0;
$assg = $collection->find($condition);
?>
<div id="wrapper" style="margin-top:10px;">
	<div class="newstape">
		<div class="newstape-content">
<?php
foreach($assg as $document){
   $assignment_heading = $document["assignment_heading"];
    $deadline = $document["deadline"]; 
?>    
    <div class="news-block">
        <h3> <?php echo $assignment_heading; ?></h3>
        <small><?php echo "(deadline -> ".date('Y-m-d H:i:s',$deadline->sec).")"; ?></small>
        <hr />
    </div>
<?php } ?>
<?php var_dump($notes); ?>
		</div>
	</div>
</div>
</div>
 <br clear="all"> 

</div>

<div class="view_section1">


</div>

</div>



<br clear="all">

</div>

<div class="view_section">


</div>

<div id="main_5">
<center>
<h5 style="padding-top:50px;"><b style="color:white;"><i class="fa fa-copyright fa-fw"></i> MINICAMPUS</b></h5>
</center>
</div>
</div>
</body>
</html>