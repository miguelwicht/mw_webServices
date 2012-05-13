<?php
$uploaddir = 'uploads/';      
$file = basename($_FILES['userfile']['name']);
$uploadfile = $uploaddir . $_POST['groupName'] . "/" . $_POST['task'] . "/" . $_POST['date'] . "_" . $_POST['groupName'] . "_" . $_POST['task'] . "." .$file;

//upload temporary file

//check if file is an image
$image_data = @getimagesize($_FILES['userfile']['tmp_name']);

if( $image_data === false ) {
		throw new Load_Image_Exception("Only images allowed.");
		break;
} 
// only allow the following image types
if ($image_data['mime'] == 'image/jpeg' OR $image_data['mime'] == 'image/jpg') {
	
		echo "Mime-Type: " . $image_data['mime'] . "\r\n";
		if (is_uploaded_file($_FILES['userfile']['tmp_name']))
		{
			echo "Temp file uploaded. \r\n";
		} else {
			echo "Temp file not uploaded. \r\n";  
		  break;
		}
		
		//move and rename uploaded file
		if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
		  echo "http://yourwebserver.com/{$uploadfile}" . "\r\n";
			echo "Filesize: " . $_FILES['userfile']['size'] . "\r\n";
			echo "Type: " . $_FILES['userfile']['type'] . "\r\n";
		} else {
			echo "Error while moving file.";
		}
}

?>