<?php
 
  require_once('connection.php');

  date_default_timezone_set('Asia/Kolkata');
  // Create Notices
  $mongo = DBConnection::instantiate();
  $collection = $mongo->getCollection('notices');

  if($_SERVER["REQUEST_METHOD"] == "POST") {
    $notice_heading = $_POST['notice_heading'];
    $notice_text = $_POST['notice_text'];
     $errors = array();

      if($notice_heading == "")
        {
          $err_heading .='Please put some heading';
        } else {
          if((strlen($notice_heading)) < 3 OR (strlen($notice_heading)) > 20)
          {
            $err_heading .= 'Notice Heading should be within 3-20 characters long.';
          } else {
            $val_heading = $notice_heading;
          }
        }

        if($notice_text == "")
        {
          $err_text .='Cannot be blank.there should be some notice';
        } else {
        	$val_text = $notice_text;
        }
            
      if((strlen($val_heading)>0)&&(strlen($val_text)>0)){
          
      	$notice = array(
      		"notice_heading" => $notice_heading,
      		"notice_text" => $notice_text,
          "date" =>date('d-m-Y H:i'),
          "group_id" => $_SESSION['g_id'],
          "user_id" => $_SESSION['userid']
        
      		);

      	try{

            $collection->insert($notice);

			echo '<script language="javascript">';
			echo 'alert("Notice successfully created")';
			echo '</script>';
			    
                  
          }
          catch (MongoCursorException $e) {
            die($e->getMessage());
          }

      } else {
      	//die;
      }
	}
?>