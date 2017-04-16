<?php
//require_once("header1.php");
?>
<?php
session_start();
require_once('connection.php');
//print_r("expression");
// if(isset($_SESSION['group_name'])){
//  // header('Location: group.php');
// }

?>
<?php
    $mongo = DBConnection::instantiate(); 
    $collection = $mongo->getCollection('groups');
    

    if(isset($_GET[$value["group_name"]]))
    {   print_r("bantesh chutiya");
        $group_name = $_GET['group_name'];
        // print_r("bantesh haramkhor");
        // $group_id = $_GET['group_id'];
        // print_r("bantesh chutiyo ka sardar");
        print_r($group_name);

        $group = $collection->findOne(array('group_name' => $group_name));


        if(isset($group)) {
            $_SESSION['group_name']= $group['group_name'];
            $_SESSION['group_id'] = $group['group_id'];
            $_SESSION['admin'] = $group['admin'];
            $_SESSION['g_id'] = $group['_id'];

            $location = 'group.php';
            return $location;
       }

       else
        {
            $location = 'welcome.php';
            return $location;
            header('Location: welcome.php');
        }
    }
    else
    {
    	print_r("shubham");
    }
  ?>



