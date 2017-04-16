<?php
session_start();
  // include header file
 require_once("header.php");
?>
<?php
        require('connection.php');
    if($_SERVER["REQUEST_METHOD"] == "GET") {
        $mongo = DBConnection::instantiate();
        $collection = $mongo->getCollection('users');
        $userId = $_SESSION['userid'];
        $user = $collection->findOne(array('_id'=> $userId));
        if(!isset($user)) {
            header('Location: login.php');
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
                    <li><a href="creategroup.php" >Create Group</a></li>
                    <li><a href="profile.php">Join Group</a></li>
                    <li><a href="profile.php">Assignment List</a></li>
                  </ul>
                </div><!--/.nav-collapse -->
              </div>
            </div>
          </div>
          <div class="col-sm-9" id="menu_block">
            <div id="profile" class="ContentDivs" style="display:block;">
                <?php if(isset($user)) { ?>
                    <div class="row" id="viewContent">
                        <div class="col-md-12">
                            <div class="col-md-4">
                                <label>First Name</label>
                            </div>
                            <div class="col-md-8">
                                <span>
                                    <?php
                                        if(isset($user['first_name'])) {
                                            echo $user['first_name'];
                                        }
                                    ?>
                                </span>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="col-md-4">
                                <label>Last Name</label>
                            </div>
                            <div class="col-md-8">
                                <span>
                                    <?php
                                        if(isset($user['last_name'])) {
                                            echo $user['last_name'];
                                        }
                                    ?>
                                </span>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="col-md-4">
                                <label>Email Address</label>
                            </div>
                            <div class="col-md-8">
                                <span>
                                    <?php
                                        if(isset($user['email'])) {
                                            echo $user['email'];
                                        }
                                    ?>
                                </span>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="col-md-4">
                                <label>Member Type</label>
                            </div>
                            <div class="col-md-8">
                                <span>
                                    <?php
                                        if(isset($user['member_type'])) {
                                            echo $user['member_type'];
                                        }
                                    ?>
                                </span>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <a href="edit-profile.php">Edit</a>
                        </div>
                    </div>
                <?php } ?>
            </div>
          </div>
        </div>
    </div>
</div>

<?php
// include footer file
    require_once("footer.php");
?>
