<?php
session_start();
  // include header file
 require_once("header.php");
?>
<?php
    require('connection.php');
    $userId = $_SESSION['userid'];
    $mongo = DBConnection::instantiate();
    $collection = $mongo->getCollection('users');
    if($_SERVER["REQUEST_METHOD"] == "GET") {
        $user = $collection->findOne(array('_id'=> $userId));
        if(!isset($user)) {
            header('Location: login.php');
        } else {
            $first_name = isset($user['first_name']) ? $user['first_name'] : '';
            $last_name = isset($user['last_name']) ? $user['last_name'] : '';
            $email = isset($user['email']) ? $user['email'] : '';
        }
    } else {
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $email = $_POST['email'];
        $gender = $_POST['gender'];

        $errors = array();
            if($first_name=="")
            {
              $err_name .='Please Enter First Name';
              //array_push($errors, "Please Enter First Name");
            }
            elseif(!ctype_alpha(str_replace(array("'", "-"), "",$first_name)))
            {
              $err_name .= 'First name should be alpha characters only.';
              //array_push($errors, "First name should be alpha characters only.");
            }
            else
            {
              if(strlen($first_name) < 3 OR strlen($first_name) > 20)
              {
                $err_name .= 'First name should be within 3-20 characters long.';
                //array_push($errors, "First name should be within 3-20 characters long.");
              }
              else
              {
                $val_name = $first_name;
              }
            }

            if($last_name=="")
            {
              $err_name1 .='Please Enter Last Name';
              //array_push($errors, "Please Enter Last Name");
            }
            elseif(!ctype_alpha(str_replace(array("'", "-"), "", $last_name)))
            {
              $err_name1 .= 'Last name should be alpha characters only.';
              //array_push($errors, "Last name should be alpha characters only.");
            }
            else
            {
              if(strlen($last_name) < 3 OR strlen($last_name) > 20)
              {
                $err_name1 .= 'Last name should be within 3-20 characters long.';
                //array_push($errors, "Last name should be within 3-20 characters long.");
              }
              else
              {
                $val_name1= $last_name;
              }
            }

            if($email=="")
            {
              $err_email .='Please Enter Email';
              //array_push($errors, "Please Enter Email");
            }
            elseif(preg_match('/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/', $email))
            {
              $emailExist = $collection->findOne(array('email'=> $email, '_id'=>array('$ne' => $userId)));
              if($emailExist) {
                $err_email = "Email Already Exists";
              } else {
                $val_email = $email;
              }
            }
            else
            {
              $err_email = 'Please enter valid Email.';
              //array_push($errors, "Please enter valid Email.");
            }
            if(strlen($gender) > 0)
            {
                $val_gender = $gender;
          } else {
              $err_gender .='Please select gender';
          }
        if((strlen($val_name)>0)&&(strlen($val_name1)>0)&&(strlen($val_email)>0)&&(strlen($val_gender)>0))
            {

              try{
                $collection->update(array("_id"=>$userId), array('$set'=>array("first_name"=>$first_name, "last_name"=>$last_name, "email"=>$email, "gender"=>$gender)));
                header('Location: /minicampus/profile.php');
              }
              catch (MongoCursorException $e) {
                die($e->getMessage());
              }
        } else  {
            die;
        }
    }

 ?>
<div class="big_part"  id="login_form">
    <div class="container">
        <div class="row">
          <div class="col-sm-3">
            <div class="sidebar-nav">
              <div class="navbar navbar-default" role="navigation">
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  <span class="visible-xs navbar-brand">Sidebar menu</span>
                </div>
                <div class="navbar-collapse collapse sidebar-navbar-collapse">
                  <ul class="nav navbar-nav">
                    <li class="active"><a href="profile.php">Profile</a></li>
                    <li><a href="profile.php" >Create Group</a></li>
                    <li><a href="profile.php">Join Group</a></li>
                    <li><a href="profile.php">Assignment List</a></li>
                  </ul>
                </div><!--/.nav-collapse -->
              </div>
            </div>
          </div>
          <div class="col-sm-9" id="menu_block">
            <div id="profile" class="ContentDivs" style="display:block;">
                <form method="post" action="<?php $_PHP_SELF ?>">
                    <div class="form-group">
                        <label for="first name">First Name:</label>
                        <input type="text" name="first_name" class="form-control" id="first_name" value="<?php echo $first_name; ?>" required>
                        <div class="error1"><?php echo $err_name;?></div>
                    </div>
                    <div class="form-group">
                        <label for="last name">Last Name:</label>
                        <input type="text" name="last_name" class="form-control" id="last_name" value="<?php echo $last_name; ?>" required>
                        <div class="error1"><?php echo $err_name1; ?></div>
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" name="email" class="form-control" id="email" value="<?php echo $email; ?>" required>
                        <div class="error1"><?php echo $err_email; ?></div>
                    </div>
                    <div>
                        <div class="radio">
                          <label><input type="radio" name="gender" value="m" <?php if(isset($user['gender']) && $user['gender']=="m"){ echo "checked";} ?> required>Male</label>
                        </div>
                        <div class="radio">
                          <label><input type="radio" name="gender" value="f" <?php if(isset($user['gender']) && $user['gender']=="f"){ echo "checked";}?> required>Female</label>
                        </div>
                        <div class="error1"><?php echo $err_email; ?></div>
                    </div>
                     <button type="submit" class="btn btn-default">Submit</button>
                </form>
            </div>
          </div>
        </div>
    </div>
</div>

<?php
// include footer file
    require_once("footer.php");
?>
