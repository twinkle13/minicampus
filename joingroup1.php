<?php
require("header1.php");
?>

<?php
session_start();
if(isset($_SESSION['group_name'])){
    header('Location: groupr6.php');
  }

?>

<?php
  require('connection.php');
  //join group
   $mongo = DBConnection::instantiate(); 
    $collection = $mongo->getCollection('groups');

   if($_SERVER["REQUEST_METHOD"] == "POST") 
    {
        $group_name = $_POST['group_name'];
        $group_id = $_POST['group_id'];

        $group = $collection->findOne(array('group_name' => $group_name,'group_id' => $group_id));

          if(isset($group)) {
           $_SESSION['group_name']= $group['group_name'];
           $_SESSION['group_id'] = $group['group_id'];
           header('Location: groupr6.php');
        }
          else
        {
            header('Location: welcome.php');
        }

      
     <!--  echo "you have joined the group succesfully"; -->
         
      
    
  } 
  ?>

<div class="container">
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal1">Join Group</button>

  <div class="modal fade" id="myModal1" role="dialog">
    <div class="modal-dialog">
    
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Join Group</h4>
        </div>
        <div class="modal-body">
          <form action="group.php" method="post" enctype="multipart/form-data">
             <div class = "form-group">
               <label style="color: #009933;font-size:20px;">Group Name</label>
                <input type="text" name="group_name" class="form-control"><br/>
            </div>
            <div class="form-group"> 
                <label style="color: #009933;font-size:20px;">Group id</label>
              <input type="text" name="group_id" class="form-control">
            </div>
             <input type="submit" value="Submit">
             </div><br/>            
         </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>

</body>
</html>

