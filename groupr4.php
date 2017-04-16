<?php
$err_deadline=$val_assignmentheading="";
//upload assignment 
  $collection = $mongo->getCollection('assignments');

 if($_SERVER["REQUEST_METHOD"] == "POST['submit_notice']") 
	  {
	  		//print_r($_FILES);
	  		//print_r($_PoOST);die;
  		$assignment_heading = $_POST['assignment_heading'];
  		$deadline = $_POST['deadline'];

  //converting deadline string to mongodate
  		$dt=new DateTime(date($deadline),new DateTimeZone('UTC'));
  		$ts=$dt->getTimestamp();
  		$date1=new MongoDate($ts);


// group id in string
  		ob_start();
  		echo $_SESSION['g_id'];
  		$_SESSION['g_id']=ob_get_clean();


  		$file_name = $_POST['file_name'];
	  	if(isset($_FILES['file'])) {
		$errors= array();
	    $file_name = $_FILES['file']['name'];
	    $file_size =$_FILES['file']['size'];
	    $file_tmp =$_FILES['file']['tmp_name'];
	    $file_type=$_FILES['file']['type'];
	    $file_ext=strtolower(end(explode('.',$_FILES['file']['name'])));
	      
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
	      
	    if($file_size > 5242880){
	        $errors[]='File size must be excately 5 MB';
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
  	if($assignment_heading == "")
  	{
  		if(isset($err_assignmentheading)){
  		$err_assignmentheading .='please enter Heading';}
  	}
  	
        else
        {
          if(strlen($assignment_heading) < 3 OR strlen($assignment_heading) > 60)
          {
            $err_assignmentheading .= 'Assignment heading should be within 3-60 characters long.';
   
          }
          else
          {
            $val_assignmentheading = $assignment_heading;
          }	
        }

    if($deadline == "")
    {
    	$err_deadline .= 'please enter deadline';
    }
    else 
        {
          $val_deadline = $deadline;

        }
    //inserting mongo date instead of string    
       
		if((strlen($val_assignmentheading)>0)&&(strlen($val_deadline)>0))
		{
	  	 	$assignment = array( 
	  	 		'file_name' => $file_name,
	            'assignment_heading' => $assignment_heading,  
	            'deadline' => $date1,
	            "group_id" => $_SESSION['g_id']
	            
	            );
	  	 	try{      
	            $collection->insert($assignment); 

			echo '<script language="javascript">';
			echo 'alert("assignment uploaded succesfully")';
			echo '</script>';   
	          } 
	          catch (MongoCursorException $e) {      
	            die($e->getMessage());    
	          }
  
		  
		}else
		{
			echo "";
		}
	}
?>
