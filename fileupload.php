<?php
	session_start();
  // include header file
 require_once("header.php");
?>
<?php

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

    if($file_size > 2097152){
        $errors[]='File size must be excately 2 MB';
    }


    if(empty($errors)==true){
    	echo  $file_type;
	    if ( in_array($file_type, $allowedMimeTypes ) )
		{
		 move_uploaded_file($file_tmp, "uploads/" . $file_name);

		} else {
			echo "error";
		}
	       // move_uploaded_file($file_tmp,"images/".$file_name);

    }else{
        print_r($errors);
    }
} else {
	//echo "test";
}

?>
<div class="big_part">
	<div  style="height:650px;">
		<div id="main_form">
			<form action="<?php $_PHP_SELF ?>" method="POST" enctype="multipart/form-data">
			select File to upload
			<input type="file" name="file" />
			<input type = "submit" value = "Upload File" name ="submit">
			</form>
		</div>
	</div>
</div>
<?php
require_once("footer.php");
?>
