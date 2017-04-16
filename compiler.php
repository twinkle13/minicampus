<?php
  /*require('session.php');
  require('user.php'); 
  $user = new User();
  if (!$user->isLoggedIn()){
     header('location: loginstudent.php');
     exit;
 }
 */?>
 <!DOCTYPE html  PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en"  xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<title>Compiler</title>
<style>
.open {
    background-color: #e7e7e7; /* Green */
    border: none;
    border-radius: 12px;
    border: 2px solid #505256;
    color: white;
    padding: 3px 20px;
    line-height: 17px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
     box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
    font-size: 14px;
    margin: 0px 0px;
    cursor: pointer;
    float: right;
    vertical-align: middle;
}



</style>

<!-- demo scripts -->
<link rel='stylesheet' href='css/editor.css' type='text/css' />

<link rel="stylesheet" href="css/mini_campus.css">
<link rel="stylesheet" href="css/common.css">
<link rel="stylesheet" href="css/bootstrap.min.css">
 <link href="css/font-awesome-4.6.1/css/font-awesome.min.css" rel="stylesheet" type="text/css">
 

<script src="script/jquery_menu.js"></script> 
 <script src="script/jquery.min.js"></script> 
<script src="script/jquery.newstape.js"></script>
<link rel="stylesheet" href="css/news.css" />
<script>
    $(function($) {
        $('.newstape').newstape();
    });
</script>
<script>

$(document).ready(function($){
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

<?php require_once('header.php'); ?>


<div class="big_part">
<br>

<div class="menu_box">

<a href="pro1.php">
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

<a href="#">
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
<a href="#">
<div  id="menu_show4" class="menu4" align="center">
<h4 id="show41"><i class="fa fa-users fa-fw"></i></h4>
<h4 id="show42" style="display:none;">Members</h4>
</div>
</a>
<a href="#">
<div  id="menu_show5" class="menu5" align="center">
<h4 id="show51"><i class="fa fa-file-text fa-fw"></i></h4>
<h5 id="show52" style="display:none;">Assignments</h5>
</div>
</a>
<br clear="all">

</div> 


<div id="wrapper" class="wrapper" style="width:80%;margin-left:250px;">
        <form id="code" action="process.php" method="post">
            <div class="SourceCode">
             <div class="panel panel-default" style="box-shadow: 1px 0 25px #993366;">
                <div class="panel-heading">
                <label for="lang">Source Code<img src="images/portfolioicon.png" style="width:30px;height:30px;"> Select Language:
                <select name="lang" id="lang" class="span6">
                    <option value="1">C</option>
                    <option value="13">Clojure</option>
                    <option value="2">C++</option>
                    <option value="9">C#</option>
                    <option value="16">Erlang</option>
                    <option value="21">Go</option>
                    <option value="12">Haskell</option>
                    <option value="3" selected="selected">Java</option>
                    <option value="18">Lua</option>
                    <option value="6">Perl</option>
                    <option value="7" >PHP</option>
                    <option value="5">Python 2</option>
                    <option value="8">Ruby</option>
                    <option value="15">Scala</option>
                    <option value="10">MySQL</option>
                    <option value="11">Oracle</option>
                </select>
                <button type="submit" name="submit" id="submit" style="margin-left:280px;">
                <img src="images/icon.png"  title="Compile & Run" data-toggle="tooltip" style="width:30px;height:30px;">
                </button> 
                </label>
                </div>
               <textarea class="span6 panel-body" cols="40" rows="10" name="source" id="source" style="width:100%;height:400px;background:#660033;color:white" placeholder="Paste/Type Code Here"></textarea>
               <div class="Input">
            <div class="panel panel-default">
         
           <textarea class="span6 panel-body" cols="40" rows="10" name="input" id="input" style="width:100%;height:100px;background:#eadeea" placeholder="input test cases here"></textarea>
           </div>
           <div class="panel-footer"></div>
           </div>
          
           </div>
            </div>
            </form>
            
            <div class="Output">
            
        
               <div class="panel-footer">
               <label for="output" id="output123">Output: <span class="description">output</span> 
               <img src="images/unnamed.png" style="width:30px;height:30px;"> 
               <button style="margin-left:80px;" class="open" id="help_me">
               <p id="result123">Result</p>
                </button>
               </label>
        </div>
               <div id="outputDiv" style="background:#4c4c4c;color:#09000C4;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);width:100%;height:400px">


               <div id="response" style="color:white;padding: 5px 3px 5px 8px;">
           
        </div>
             </div>
             <div id="outputDiv" style="background:#e0e1e2;border: 1px solid gray;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);color:#09000C4;width:100%;height:100px">


               <div id="responsetime" style="color:#09000C4;padding: 5px 3px 5px 8px;">

           
        </div>
             </div>
             <br>
             <div class="panel-footer"></div>
        
            
            </div>
            
            </div>
          
            <br clear="all">
 
        
    

<div id="main_5">
<center>
<h5 style="padding-top:50px;"><b style="color:white;"><i class="fa fa-copyright fa-fw"></i> MINICAMPUS</b></h5>
</center>
</div>
</div>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="script/script.js"></script>
</body>
</html>