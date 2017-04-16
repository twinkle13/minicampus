<?php
  // Include header file
  require_once("header.php");
 // require_once("header1.php");

?>
<?php

require('connection.php');
$val_email="";
  // create user
  $mongo = DBConnection::instantiate();
  $collection = $mongo->getCollection('users');

  if($_SERVER["REQUEST_METHOD"] == "POST") {

    $first_name = $_POST['fname'];
    $last_name = $_POST['lname'];
    $member_type = $_POST['member'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $dob = $_POST['dob'];
    $password = $_POST['password'];
    

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
        if($username=="")
        {
          $err_username .='Please Enter User Name';
          //array_push($errors, "Please Enter User Name");
        }
        elseif(!preg_match('/^([a-zA-Z])[a-zA-Z_-]*[\w_-]*[\S]$|^([a-zA-Z])[0-9_-]*[\S]$|^[a-zA-Z]*[\S]$/',$username))
        {
          $err_username .= 'Username Should Starts With An Alphabet and Contains No special Characters Other Than Underscore Or Dash.';
          //array_push($errors, "Username Should Starts With An Alphabet and Contains No special Characters Other Than Underscore Or Dash.");
        }
        else
        {
          if(strlen($username) < 3 OR strlen($username) > 20)
          {
            $err_username .= 'Username should be within 3-20 characters long.';
            //array_push($errors, "Username should be within 3-20 characters long.");
          }
          else
          {
            $usernameExist = $collection->findOne(array('username'=> $username));
            if($usernameExist) {
              $err_username = "username Already Exists";
            } else {
              $val_username= $username;
            }
          }
        }
        if($email=="")
        {
          $err_email .='Please Enter Email';
          //array_push($errors, "Please Enter Email");
        }
        elseif(preg_match('/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/', $email))
        {
          $emailExist = $collection->findOne(array('email'=> $email));
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
        if($password=="")
        {
          $err_password .='Please Enter Password';
          //array_push($errors, "Please Enter Password");
        }
        elseif(!(strlen($password) < 8 OR strlen($password) > 20))
        {
          $val_password =$password;

        }
        else
        {
          $err_password = 'Password should be within 8-20 characters long.';
          //array_push($errors, "Password should be within 3-20 characters long.");
        }
    if((strlen($val_name)>0)&&(strlen($val_name1)>0)&&(strlen($val_email)>0)&&(strlen($val_username)>0)&&(strlen($val_password)>0))
        {

          $user = array(
            "first_name" => $first_name,
            "last_name" => $last_name,
            'member_type' => $member_type,
            'email' => $email,
            'username' => $username,
            'dob' => $dob,
            'password' => md5($password),
            'group_name' =>array()
          );

          try{
            $collection->insert($user);
             echo "You have been registered successfully";
            header('Location: login.php?member_type='.$member_type);
          }
          catch (MongoCursorException $e) {
            die($e->getMessage());
          }
      } else {
          die;
      }


  }
?>

<div class="main" id="signup_form" style="height:680px;padding-top: 80px; background-image:url(images/box.jpg);opacity:1;background-image-opacity:0.2">
<h1 style="color:#339966;font-size:20px;font-family:cursive;margin-left:20px;padding-top:20px;">Welcome to Minicampus... Please signup here...</h1>
<div id="main_form" style="margin-right:40%;
  padding-top:1%;
">
<center>
 <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" name="register_form">
    
 <div class="form-group">
 
 <label style="color: #009933;font-size:20px;">Name</label>
 <div class=" form-inline">
 <input type="text" name="fname" class="form-control" placeholder="first name" style="width:225px;height:45px;" />
  <input type="text" name="lname" class="form-control" placeholder="last name" style="width:225px;height:45px;" value="<?php if(isset($lastname)) {echo $lastname;} ?>"/>

  <?php if(isset($err_name)) : ?>
            <div class="error1"><?php if(isset($err_name)){ echo $err_name; }?></div>
          </div>
           <?php endif; ?>
          
            
            <?php if(isset($err_name1)) : ?>
            <div class="error1"><?php echo $err_name1; ?></div> <?php endif; ?>
          </div>
        
      
      <div class="form-group">
        <label style="color: #009933;font-size:20px;">Member Type</label>
        <select name="member_type" class="form-control" style="width:450px;height:45px;">
         <option selected>Select</option>
         <option>Student</option>
         <option>Teacher</option>
        </select>
      </div>
      <div class="form-group">
        <label style="color: #009933;font-size:20px;">Email Address</label>
        <input type="email" name="email" class="form-control" placeholder="example@gmail.com" style="width:450px;height:45px;" value="<?php if(isset($val_email)) {echo $val_email;} ?>"/>
        <div class="error1"><?php if(isset($err_email)){echo $err_email;} ?></div>
      </div>
      <div class="form-group">
        <label style="color: #009933;font-size:20px;">Username</label>
        <input type="text" name="username" class="form-control" placeholder="eg. 14103077" style="width:450px;height:45px;" value="<?php if(isset($username)) {echo $username; }?>" />
        <div class="error1"><?php if(isset($err_username)){echo $err_username;} ?></div>
      </div>
      
      <div class="form-group">
        <label style="color: #009933;font-size:20px;">Password</label>
        <input type="password" name="password" class="form-control"  style="width:450px;height:45px;"  />
        <div class="error1"><?php if(isset($err_password)) {echo $err_password;} ?></div>
      </div>
      <br />
      <input type="submit" class="content_btn" id="btn2" name="register" value="Register" >
     </form>
  </div>
  </center>
</div>
<?php
  // Include footer file
  require_once("footer.php");
?>
