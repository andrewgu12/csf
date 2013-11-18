<?php
//require_once("connect.php");
echo "Here";
$allowedExtensions = array("image/jpg", "image/jpeg", "image/png");
$max_filesize = 204800;
$upload_path = "images/members";
$filename = $_FILES["file"]["name"];
$filesize = $_FILES["file"]["size"];
$extension = $_FILES["file"]["type"];
if((in_array($extension, $allowedExtensions)) && ($filesize < $max_filesize)) {
	echo $_FILES["file"]["error"];
	move_uploaded_file($_FILES["image"]["tmp_name"], $upload_path . $filename);
}
else if($filesize > $max_filesize){
	$fileSizeFail = true;
}
else {                      
	$fileTypeFail = true;
}
	