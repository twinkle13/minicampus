<?php
//echo "welcome to group";
include("header.php");
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
 

<script src="jquery_menu.js"></script> 
<script src="jquery.min.js"></script>
<script src="jquery.newstape.js"></script>
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

</head>

<body>

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
 <a href="#" style="text-decoration:none;"><h4>Contact Us</h4></a>
 </div>
<div class="m4"> 
<a href="support.php" style="text-decoration:none;"> <h4>Support</h4></a>
</div>
<div class="m5"> 
<a href="support.php" style="text-decoration:none;"> <h4><i class="fa fa-power-off fa-fw"></i>Logout</h4></a>
</div>
</div>
<br clear="all" />

</div>

<div class="big_part">

<div class="menu_box">

<a href="#">
<div id="menu_show2" class="menu2" align="center">
<h4 id="show21"><i class="fa fa-chain fa-fw"></i></h4>
<h4 id="show22" style="display:none;">Option</h4>
</div>
</a>
<br clear="all">


<div  class="menu" align="center">
<h3 id="M1"><i class="fa fa-bars fa-2x"></i></h3>
<h3 id="M2" style="display:none;"><i class="fa fa-times fa-2x"></i></h3>
</div>

<a href="#">
<div  id="menu_show1" class="menu1" align="center">
<h4 id="show11"><i class="fa fa-user fa-fw"></i></h4>
<h4 id="show12" style="display:none;">Profile</h4>
</div>
</a>
<br clear="all">

<a href="#">
<div  id="menu_show3" class="menu3" align="center">
<h4 id="show31"><i class="fa fa-arrows-alt fa-fw"></i></h4>
<h4 id="show32" style="display:none;">Hubs</h4>
</div>
</a>
<a href="#">
<div  id="menu_show4" class="menu4" align="center">
<h4 id="show41"><i class="fa fa-users fa-fw"></i></h4>
<h4 id="show42" style="display:none;">Faculty</h4>
</div>
</a>
<a href="#">
<div  id="menu_show5" class="menu5" align="center">
<h4 id="show51"><i class="fa fa-cutlery fa-fw"></i></h4>
<h5 id="show52" style="display:none;">Annapurna</h5>
</div>
</a>
<br clear="all">

</div>  
<br><br><br>
<div>

<div class="common_box1">
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
<p>Create Event</p>
</div>
</div>
<div class="create_box3" onclick="fun3()">
<div class="Assignment_box" align="center">
<p>Assignment</p>
</div>
</div>
 <?php 
 require("groupr2.php");

?> 
<div id="news-form">
<form style="margin:10px;" method="post"> 
<input type="text" name="notice_heading" placeholder="Notice Heading" class="form-control" value="<?php echo $val_heading; ?>" />  <br>
 <div class="error1"><?php echo $err_heading;?></div>
<label>Notice</label>
<textarea rows="3" cols="15" name="notice_text" class="form-control" value="<?php echo $val_text; ?>"></textarea><br>
 <div class="error1"><?php echo $err_text;?></div>
<button class="btn" style="background:#339966;color:white;font-size:20px;">Submit</button>
</form> 
</div>
<?php
require("groupr3.php");
?>
<div id="event-form" style="display:none;">
<form style="margin:10px" method = "POST">
<input type="text" name="event_name" placeholder="Event's Name" class="form-control"> <br>
<div class="form-inline">
<label>Venue</label>
<input type="text"  name = "place" placeholder="eg. LT2" class="form-control"  style="width:100px;">
<input type="text" name = "time" placeholder="Monday | 01-10-2016 | 03:00 pm" class="form-control" style="width:300px;">
</div> <br>
<textarea rows="3" cols="15" name = "details" placeholder="Details..."  class="form-control"></textarea><br>
<button  type="submit" class="btn" style="background:#339966;color:white;font-size:20px;">Create</button>
</form>
</div>

<?php require("groupr4.php"); ?>
 <div id="assignment-form">
<form style="margin:10px;" method="post"> 
<input type="text" name="assignment_heading" placeholder="Assignment Heading" class="form-control" value="<?php //echo $val_assignmentheading; ?>" />  <br>
 <div class="error1"><?php echo $err_assignmentheading;?></div>
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

<div class="common_box2">
<div class="tap"><div id="triangle-bottomright"></div><p id="tap1">Notices</p></div>

<div id="wrapper" style="margin-top:10px;">
    <div class="newstape">
        <div class="newstape-content">
            <div class="news-block">
                <h3>T3 Exam</h3>
                <small>02.12.2015</small>
                <p class="text-justify">
                   The T3 exams for the odd semester 2015 are going to start from the 10th of december 2015 for all the B.Tech students. For datesheet and other related information please visit the college notice board.
                </p>
                <div class="text-right">
                    <a href="#">More</a>
                </div>
                <hr />
            </div>
            <div class="news-block">
                <h3>Minor evaluation on 5 dec.</h3>
                <small>05.11.2015</small>
                <p class="text-justify">
                    there are information related to minors submission check out on SM.
                </p>
                <div class="text-right">
                    <a href="#">More</a>
                </div>
                <hr />
            </div>
            <div class="news-block">
                <h3>Os project evaluation fri 2-3 at cabin</h3>
                <small>15.12.2015</small>
                <p class="text-justify">
                   Aadarsh kumar sir will evaluate os project tomorrow .
                </p>
                <div class="text-right">
                    <a href="#">More</a>
                </div>
                <hr />
            </div>
        </div>
    </div>
</div>

</div>
 <br clear="all"> 

</div>

<div class="view_section1">


</div>

</div>

<div class="common_box3">
<div class="tap1"><div id="triangle-bottomright"></div><p id="tap1">Assignments</p></div>

<div id="wrapper" style="margin-top:10px;">
    <div class="newstape">
        <div class="newstape-content">
            <div class="news-block">
                <h3>T3 Exam</h3>
                <small>02.12.2015</small>
                <p class="text-justify">
                   The T3 exams for the odd semester 2015 are going to start from the 10th of december 2015 for all the B.Tech students. For datesheet and other related information please visit the college notice board.
                </p>
                <div class="text-right">
                    <a href="#">More</a>
                </div>
                <hr />
            </div>
            <div class="news-block">
                <h3>Minor evaluation on 5 dec.</h3>
                <small>05.11.2015</small>
                <p class="text-justify">
                    thier are information related to minors submission check out on SM.
                </p>
                <div class="text-right">
                    <a href="#">More</a>
                </div>
                <hr />
            </div>
            <div class="news-block">
                <h3>Os project evaluation fri 2-3 at cabin</h3>
                <small>15.12.2015</small>
                <p class="text-justify">
                   Aadarsh kumar sir will evaluate os project tomorrow .
                </p>
                <div class="text-right">
                    <a href="#">More</a>
                </div>
                <hr />
            </div>
        </div>
    </div>
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