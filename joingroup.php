<?php
require_once("header1.php");
?>
<?php

require_once('connection.php');
// if(isset($_SESSION['group_name'])){
//  // header('Location: group.php');
// }

?>
<?php
    $mongo = DBConnection::instantiate(); 
    $collection = $mongo->getCollection('groups');
    $collection1=$mongo->getCollection('users');

    if($_SERVER["REQUEST_METHOD"] == "POST['submit_join']") 
    {
        $group_name = $_POST['group_name'];
        $group_id = md5($_POST['group_id']);

        $group = $collection->findOne(array('group_name' => $group_name,'group_id' => $group_id));

          if(isset($group)) {
           $_SESSION['group_name']= $group['group_name'];
           $_SESSION['group_id'] = $group['group_id'];
            $_SESSION['admin'] = $group['admin'];
            ob_start();
        $_SESSION['g_id'] = $group['_id'];
        echo $_SESSION['g_id'];
        $_SESSION['g_id']=ob_get_clean();
           // $group_name=$collection1->update(array('email' =>$_SESSION['email'] ),array('$push' =>array('group_name',$_SESSION['group_name'] ) ));
          $collection1->update(array('_id' =>new MongoId($_SESSION['userid']) ),array('$push' =>array('group_name'=>$_SESSION['g_id'] ) ));
          $collection->update(array('group_name' => $_POST['group_name']),array('$push' =>array('members'=>$_SESSION['userid'] ) ));

          header('Location: group.php');


          

        // $collection2->update(array('_id'=>new MongoId($_SESSION['userid'])),array('$push'=>array('group_name'=>$_SESSION['g_id'])));
        //  $collection->update(array('group_name'=>$group_name),array('$push'=>array('members'=>$_SESSION['userid'])));
        //    $location = 'group.php';


          
        }
          else
        {
             $location = 'welcome.php';
           return $location;
            header('Location: welcome.php');
        }

    }
  ?>

<!--<div class="container">-->
 <button class="btn" style="width:50%;height:50px;background:#339966;color:white;padding:10px 20px;font-size:20px;" data-toggle="modal" data-target="#myModal1" name="submit_join">Join Group</button>

  <div class="modal fade" id="myModal1" role="dialog">
    <div class="modal-dialog">

      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Join Group</h4>
        </div>
        <div class="modal-body">
          <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data" id="join_group">
           <div class = "form-group">
             <label style="color: #009933;font-size:20px;">Group Name</label>
             <input type="text" name="group_name" class="form-control"><br/>
           </div>
           <div class="form-group"> 
            <label style="color: #009933;font-size:20px;">Group id</label>
            <input type="text" name="group_id" class="form-control">
            </div>
            <input type="submit" value="Submit" name = "submit_join">
          </form>

        </div>
        <br/>            
      </div>
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    </div>
  </div>
<!--</div>-->
</body>
</html>