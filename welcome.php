<?php
  session_start();
  // include header file
 require_once("header.php");
 require_once("header1.php");
   //require("header.php");
?>
<!-- <div class="divmain" style="padding-top:150px"> -->


<?php
// require_once("footer.php");
?>
<!-- </div> -->

<br> <br> <br> <br> <br> <br>

<style type="text/css">
body{
  background-image: url('images/imageedit_1_9282509114.jpg');
}
.assignment{
  width: :100%;
  height:50px;
  background-color:rgba(0,0,0,0.5);
  background:white;
  margin-top:10px;
  padding:10px 8px;
}
.assignment h4{
  float: left;
  padding-left:50px;
}
</style>

<div class="container">
  <div class="row">
  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
 <?php
    require_once('connection.php');
    if(isset($_SESSION['userid'])){ ?>
       <div style="padding-top:150px;display:none;">
       <?php   echo "Welcome ". $_SESSION['username']."[".$_SESSION['email']."]";
       echo "hie".$_SESSION['member_type']."  ".$_SESSION['userid']; ?>
       </div> 
 
      <br/> 
      
      <?php
        require_once("creategroup.php");
      ?>
      <br> <br>
      <?php
      require_once("joingroup.php");
      ?>

   <?php
    } else {
      header('Location: login.php');
    }
  ?>
  <br>
  <img src="images/Online-education.png" style="float:left;height:50%;width:50%;padding-top:100px">
    </div>

    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
      <div class="banteshBox1">
<div class="grpHeading"><b>Groups</b></div>
<?php 
$mongo = DBConnection::instantiate();
$collection = $mongo->getcollection('users');
$collection1 = $mongo->getcollection('groups');
$uid = $_SESSION['userid'];

$user1 = $collection->findOne(array('_id' => new MongoId($uid)));
$ids = [];
$cc=count($user1["group_name"]);

//var_dump($user1);
/*for($i=0;$i<$cc;$i++)
{
  //array_push($ids, $user1["group_name"]->$[$i]);
}
*/


foreach ($user1["group_name"] as $id) {
 
  array_push($ids, $id);
  # code...
}
for($i=0;$i<$cc;$i++)
{
  $ids[$i]=new MongoId($ids[$i]);
}

$group_details = $collection1->find(['_id' => [
                                                '$in'=> $ids
                                                ]
                                    ]);
foreach ($group_details as $id =>$value)
{
  //echo $value["group_name"]."<br/>";
 //var_dump(iterator_to_array($group_details));


 echo '<div class="grp1">'.$value["group_name"].'<br/>
  
 <form action="welcome.php" method="POST">

 <select name="group_name" style="display:none;">
 <option selected>'.$value["group_name"].'</option>
 </select>
 <button type="submit" class="btn btn-primary" style="width:50px">GO</button>
 </form>
 </div>';

  
//echo '<a href="group.php/?group_name='.$value["group_name"].'&group_id='.$value["group_id"].'><div class="grp1">'.$value["group_name"].'<br/></div></a>';
}
?>

<a href="#"><div class="grp1" style="padding:30px 60px;font-size:60px;">+</div></a>
</div>
    </div>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <div class="assignment">
       <a href="#"><h4>Assignment name</h4></a>
        <h4>17-12-2016</h4>
        <a href="#"><h4><i class="fa fa-download fa-fw"></i>Download</h4></a>
      </div>
     <div class="assignment">
       <a href="#"><h4>Assignment name</h4></a>
        <h4>17-12-2016</h4>
        <a href="#"><h4><i class="fa fa-download fa-fw"></i>Download</h4></a>
      </div>
      <div class="assignment">
       <a href="#"><h4>Assignment name</h4></a>
        <h4>17-12-2016</h4>
        <a href="#"><h4><i class="fa fa-download fa-fw"></i>Download</h4></a>
      </div>
      <div class="assignment">
       <a href="#"><h4>Assignment name</h4></a>
        <h4>17-12-2016</h4>
        <a href="#"><h4><i class="fa fa-download fa-fw"></i>Download</h4></a>
      </div>
      <div class="assignment">
       <a href="#"><h4>Assignment name</h4></a>
        <h4>17-12-2016</h4>
        <a href="#"><h4><i class="fa fa-download fa-fw"></i>Download</h4></a>
      </div>
      <div class="assignment">
       <a href="#"><h4>Assignment name</h4></a>
        <h4>17-12-2016</h4>
        <a href="#"><h4><i class="fa fa-download fa-fw"></i>Download</h4></a>
      </div>
      <div class="assignment">
       <a href="#"><h4>Assignment name</h4></a>
        <h4>17-12-2016</h4>
        <a href="#"><h4><i class="fa fa-download fa-fw"></i>Download</h4></a>
      </div>
      <div class="assignment">
       <a href="#"><h4>Assignment name</h4></a>
        <h4>17-12-2016</h4>
        <a href="#"><h4><i class="fa fa-download fa-fw"></i>Download</h4></a>
      </div>
      <div class="assignment">
       <a href="#"><h4>Assignment name</h4></a>
        <h4>17-12-2016</h4>
        <a href="#"><h4><i class="fa fa-download fa-fw"></i>Download</h4></a>
      </div>
    </div>
  </div>
</div>
