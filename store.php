<?php
include('<path to db connection file>/db.php');

$path = '/uploads/';   
 
if (!empty($_FILES)) {
    
	  $tempFile = $_FILES['file']['tmp_name'];   
	  $targetPath = dirname( __FILE__ ) .'/'. $path .'/'; 

		$targetFile =  $targetPath. $_FILES['file']['name'];  
		$storePath = $path.$_FILES['file']['name'];
		$val = $_FILES['file']['name'];

		move_uploaded_file($tempFile,$targetFile); 
		chmod($targetFile, 0777);

		$sql = "INSERT INTO `uploads`(`path`) VALUES ('$storePath')";

		if($id = mysqli_query($con,$sql)){
			return true;
		}else{
			return false;
		}
}
?>
