<?php
require_once("header1.php");

?>

<!--  <?php //echo '<button type="button" name="acceptButton" id="acceptButton" class="btn btn-success" onClick="javascript:window.location.href=\'group.php\';">submit</button>';?> -->   
  
<?php
 

if(isset($_POST["submit_create"])){
  
  require_once('connection.php');
 session_start();
//create group
$mongo = DBConnection::instantiate();
$collection = $mongo->getCollection('groups');
$collection1 = $mongo->getcollection('users');
 
  

         //print_r($_FILES);
        //print_r($_POST);die;
  $group_name = $_POST['group_name'];
  $group_id = $_POST['group_id'];
  $file_name = $_POST['file'];
  // echo $file_name;

  if(isset($_FILES['file'])) {
    $errors= array();
    $file_name = $_FILES['file']['name'];
    $file_size =$_FILES['file']['size'];
    $file_tmp =$_FILES['file']['tmp_name'];
    $file_type=$_FILES['file']['type'];
    $file_ext=strtolower(end(explode('.',$_FILES['file']['name'])));

// echo $file_ext;
    $allowedExts = array(
      "pdf", 
      "doc", 
      "docx"
      ); 

    $allowedMimeTypes = array( 
      'application/msword',
      'application/pdf',
      'image/gif',
      'image/jpeg',
      'image/png'
      );
    if(!(in_array($file_ext,$allowedExts))){
      $errors[]="extension not allowed, please choose a JPEG or PNG file.";
    }

    if($file_size > 2097152){
      $errors[]='File size must be excately 2 MB';
    }


    if(empty($errors)==true){
      echo  $file_type;
      if ( in_array($file_type, $allowedMimeTypes ) ) 
      {      
        move_uploaded_file($file_tmp, "uploads/" . $file_name); 
        $file_name = $file_name;

      } else {
        echo "error";
      }
           // move_uploaded_file($file_tmp,"images/".$file_name);

    }else{
      $file_err = $errors;
    }
  }

  $errors = array();
  if($group_name == ""){
    $err_name .='please enter group name';
  }
  else if(!ctype_alpha(str_replace(array("'", "-"), "",$group_name))){ 
    $err_name .= 'group name should be alpha characters only.';
  }
  else{
    if(strlen($group_name) < 3 OR strlen($group_name) > 20){
      $err_name .= 'group name should be within 3-20 characters long.';
    }
    else{
      $val_name = $group_name;
    } 
  }

  if($group_id == "")
  {
    $err_name1 .= 'please enter group id';
  }
  else if(!(strlen($group_id) < 8 OR strlen($group_id) > 20)) 
  {
    $val_id =$group_id;

  }
  else {
    $err_id = 'group_id should be within 8-20 characters long.';

  } 

  if((strlen($val_name)>0)&&(strlen($val_id)>0))
  {

    $group = array( 
      "group_name" => $group_name,  
      'group_id' => md5($group_id),
      'file_name' => $file_name,
      'admin' => $_SESSION['userid'],
      'members' => array($_SESSION['userid'])
      );
    try{ 
      $collection->insert($group);
      $group1=$collection->findOne(array('group_name'=>$_POST['group_name'],'group_id'=>md5($_POST['group_id'])));
      if(isset($group1)){
        ob_start();
        $_SESSION['g_id'] = $group1['_id'];
        echo $_SESSION['g_id'];
        $_SESSION['g_id']=ob_get_clean();
        $_SESSION['group_name']=$group1['group_name'];
        $_SESSION['group_id']=$group1['group_id'];
        $_SESSION['admin']=$group1['admin'];
      }
      
     $collection1->update(array('_id'=>new MongoId($_SESSION['userid']) ),array('$push'=>array('group_name'=>$_SESSION['g_id'])));

      header('Location: group.php'); 
              /* $message =  "You have created group succesfully";
           echo "<script type='text/javascript'>alert('$message');</script>"; 
              */

         } catch (MongoCursorException $e) {  

          //die($e->getMessage());    
        }



      }
    }
  ?>
<!-- <script src = "js/jquery/js"></script>
<script src = "js/bootstrap.min.js"></script> -->

<!--<div class="container" style="padding-top:20px"> -->
 <!-- <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Create group</button> -->
 
<!--</div> -->
<button class="btn" style="width:50%;height:50px;background:#339966;color:white;padding:10px 20px;font-size:20px;" data-toggle="modal" data-target="#myModal">Create Group</button>


  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Create Group</h4>
        </div>
        <div class="modal-body">
          <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data" id="create_group">
            <div class="row">
             <div class = "form-group">
               <label style="color: #009933;font-size:20px;">Group Name</label>
               <input type="text" name="group_name" class="form-control"><br/>
               <div class="error1"><?php if(isset($err_name)){echo $err_name;} ?></div>
             </div>
             <div class="form-group"> 
              <label style="color: #009933;font-size:20px;">Group id</label>
              <input type="text" name="group_id" class="form-control">
              <div class="error1"><?php if(isset($err_id)){echo $err_id;}?>
              </div>
            </div>
            <div class="form-group">
              <input type="file" name="file" />
            </div>
            <input type="submit" value="Submit" id="submit_group" name = "submit_create"> 
          </div><br />            
          </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


</body>
</html>