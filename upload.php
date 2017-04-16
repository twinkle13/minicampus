<?php

if(isset($_FILES['fileToUpload'])) {
	$errors= array();
    $file_name = $_FILES['fileToUpload']['name'];
    $file_size =$_FILES['fileToUpload']['size'];
    $file_tmp =$_FILES['fileToUpload']['tmp_name'];
    $file_type=$_FILES['fileToUpload']['type'];
    $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
      
    $allowedExts = array(
	  "pdf", 
	  "doc", 
	  "docx"
	); 

	$allowedMimeTypes = array( 
	  'application/msword',
	  'text/pdf',
	  'image/gif',
	  'image/jpeg',
	  'image/png'
	);
    if(!(in_array($file_ext,$allowedExts)){
        $errors[]="extension not allowed, please choose a JPEG or PNG file.";
    }
      
    if($file_size > 2097152){
        $errors[]='File size must be excately 2 MB';
    }

    echo "i am here"; die;
      
    if(empty($errors)==true){
    if ( in_array( $file_type, $allowedMimeTypes ) ) 
	{      
		echo "here";
	 move_uploaded_file($file_tmp, "uploads/" . $file_name); 
	 echo "Success";
	} else {
		echo "error";
	}
       // move_uploaded_file($file_tmp,"images/".$file_name);
        
    }else{
        print_r($errors);
    }
} else {
	echo "test";
}
/*$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileTOUpload"]["name"]);
$uploadOk = 1;
$FileType = pathinfo($target_file,PATHINFO_EXTENSION);
//check if file is a actual or fake
if(isset($_POST["submit"])){
	$check = getfilesize($_FILES["fileToUpload"]["tmp_name"]);
	if($check!==false){
		echo "File is actual - ". $check["mime"] . ".";
		$uploadOk = 1;
	}
	else{
		echo"file is fake.";
         $uploadOk = 0;
	}
}
print_r($target_file);
//check if file already exists
if(file_exists($target_file)) 
{
	echo "sorry,file already exist.";
	$uploadOk = 0;
}*/

/*//check file size
if($_FILES["fileToUpload"]["size"]>5000000) {
	echo "sorry,your file is too large.";
	$uploadOk = 0;
}

//allow certain file formats
if($FileType != "pdf" && $Filetype ="doc" && $FileType ="docx")
{
	echo "sorry only pdf,doc,docx file is allowed.";
	$uploadOk = 0;
}
//check if $uploadOk is set to 0 by an error
if($uploadOk == 0)
{
	if($uploadOk ==0) 
	{
		echo "sorry,your file was not uploaded.";
//if everything is ok,try to upload your file		
	}
	else
	{
		if(move_uploaded_file($_FILES["fileTOUpload"]["tmp_name"],$target_file))
		{
			echo "The file".basename($_FILES["fileToUpload"]["name"]). " has been uploaded.";
		}
		else
		{
			echo "sorry,there was an error uploading your file.";
		}
		}
	}
*/

?>



