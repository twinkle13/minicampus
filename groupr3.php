<?php
 // Create Event
  $collection = $mongo->getCollection('events');

  if($_SERVER["REQUEST_METHOD"] == "POST") {
    $event_name = $_POST['event_name'];
    $place = $_POST['place'];
    $time = $_POST['time'];
    $details = $_POST['details'];

     $errors = array();

      if($event_name == "")
        {
          $err_name .='Please fill the column';
        }  else
          {
            $val_name = $event_name;
          }
        

         if($place == "")
        {
          $err_place .='Cannot be blank.there should be some notice';
        }

        else
        {
        	$val_place = $place;
        }

        if($time == "")
        {
          $err_time .='please fill the blank';
        }
        else
        {
          $val_time = $time;
        }

        if($details == "")
        {
          $err_details .='please fill in the blanks';
        }
        else
        {
          $val_details = $details;
        }

      if((strlen($val_name)>0)&&(strlen($val_place)>0)&&(strlen($val_time)>0)&&(strlen($val_details)>0)){

      	$event = array(
      		"event_name" => $event_name,
      		"place" => $place,
          "time" => $time,
          "details" => $details
      		);

      	try{
          echo "niuhverhv";
            $collection->insert($event);
               
                echo '<script language="javascript">';
               echo 'alert("Event successfully created")';
               echo '</script>';
                  
          }
          catch (MongoCursorException $e) {
            die($e->getMessage());
          }

      }else{
        //echo "inrhfohrfhof";
      	//die;
      }

}
?>