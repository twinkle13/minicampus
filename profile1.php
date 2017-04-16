<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<title>Home</title>

<!-- demo scripts -->
<link rel="stylesheet" href="css/profile.css">
<link rel="stylesheet" href="css/mini_campus.css">
<link rel="stylesheet" href="css/common.css">
<link rel="stylesheet" href="css/bootstrap.min.css">
 <link href="font-awesome-4.6.1/css/font-awesome.min.css" rel="stylesheet" type="text/css">
 
<script src="bootstrap.min.js"></script>
<script src="jquery_menu.js"></script> 
<script src="jquery.min.js"></script>
<script src="jquery.newstape.js"></script>
<link rel="stylesheet" href="news.css" />
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
$(document).ready(function(){
$(".open").click(function(){
 $('.pop-outer').fadeIn('slow');
});
$(".close").click(function(){
 $('.pop-outer').fadeOut('slow');
});
});
</script>
</head>

<body>

<div id="well1" class="navbar-fixed-top">

<div class="well11">
<a href="mini_campus.html" style="text-decoration:none;"><h2>MiniCampus</h2></a>
</div>
<div class="well12">
<div class="m1">
<a href="mini_campus.html" style="text-decoration:none;"><h4>Home</h4></a>
 </div>
<div class="m2">
 <a href="about.html" style="text-decoration:none;"><h4>About Us</h4></a>
 </div>
<div class="m3">
 <a href="#" style="text-decoration:none;"><h4>Contact Us</h4></a>
 </div>
<div class="m4"> 
<a href="support.html" style="text-decoration:none;"> <h4>Support</h4></a>
</div>
<div class="m5"> 
<a href="support.html" style="text-decoration:none;"> <h4><i class="fa fa-power-off fa-fw"></i>Logout</h4></a>
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

<div class="gpBx" style="float:left;width:17%;height:275px;margin-top:150px;margin-left:10px;border-radius:5px;border:5px solid  #ebebe0">
<br>
<a href="joingroup.php" style="text-decoration:none;"><div style="width:100%;height:50px;background:#cc5200;color:white;padding:10px 20px;font-size:20px;">Join Group</div> <hr></a>
 <div style="width:100%;height:50px;background:#cc5200;color:white;padding:10px 20px;font-size:20px;"> <?php require_once("creategroup.php"); ?></div>
<div style="width:100%;height:50px;background:#cc5200;color:white;padding:10px 20px;font-size:20px;">Assignments</div>
</div>

<div class="banteshBox" style="width:47%;margin-left:20px;"> 
<div class="banteshBox1">
<div class="grpHeading"><b>Groups</b></div>
<a href="#"><div class="grp1">Group-1</div></a>
<a href="#"><div class="grp1">Group-2</div></a>
<a href="#"><div class="grp1">Group-3</div></a>
<a href="#"><div class="grp1" style="padding:30px 60px;font-size:60px;">+</div></a>
</div>
<br><br>
<div class="banteshBox2">
<div class="grpHeading"><b>Reminder</b> </div>
  <table class="table table-bordered table-hover table-condensed">
  <thead>
  <tr>
  <th>Assignment</th>
  <th>Submition Date</th>
  </tr>
  </thead>
  <tbody>
  <tr>
  <td>1</td>
  <td>24-11-2016</td>
  </tr>
   <tr>
  <td>2</td>
  <td>25-11-2016</td>
  </tr>
   <tr>
  <td>3</td>
  <td>26-11-2016</td>
  </tr>
   <tr>
  <td>4</td>
  <td>27-11-2016</td>
  </tr>
  </tbody>
  </table>
  
  <div style="float:left;margin-left:20px;">
  <li class="open"><a href="#">Show More</a></li>
<div class="pop-outer" style="display:none;z-index:1">
<div class="pop-inner">
<div class="well well-sm"><b>Assignments</b> <button class="close">X</button></div>
</div>
</div>
  </div>
   <div class="progress" style="width:50%;float:left;margin-left:40px;">
   <div class="progress-bar progress-bar-warning" style="width:70%">70%</div>
   </div>
</div>
</div>

<div class="common_box2" style="width:30%">
<div class="tap"><div id="triangle-bottomright"></div><p id="tap1">News</p></div>

<div id="wrapper" style="margin-top:10px;width:100%">
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