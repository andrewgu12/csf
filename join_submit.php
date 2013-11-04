<?php
	require_once("included.php");
	$firstName = mysqli_real_escape_string($conn, trim($_POST['firstName']));
	$lastName = mysqli_real_escape_string($conn, trim($_POST['lastName']));
	$grade = mysqli_real_escape_string($conn, $_POST['grade']);
	$id = mysqli_real_escape_string($conn, $_POST['studentID']);
	$email =  mysqli_real_escape_string($conn, $_POST['email']);
	$phone = mysqli_real_escape_string($conn, $_POST['phone']);
	$password = $firstName . " " . $lastName;
	$password = sha1($password);

	$allowedExtensions = array("pdf");
	$max_filesize = 20000;
	$upload_path = "docs/transcripts";
	$filename = $_FILES["transcript"]["name"];			
	$filesize = $_FILES["transcript"]["size"];
	$extension = $_FILES["transcript"]["type"];
	 
	if((in_array($extension, $allowedExtensions)) && ($filesize < $max_filesize)) {
		move_uploaded_file($_FILES["transcript"]["tmp_name"], $upload_path . $filename);
	}
	else if($filesize > $max_filesize){
		$fileSizeFail = true;
	}
	else {                      
		$fileTypeFail = true;
	}
	mysqli_query($conn, "INSERT INTO `user`(`studentid`, `name`, `lastName`, `email`, `password`, `hours`, `grade`, `phone`, `transcript`) VALUES ('$id', '$firstName', '$lastName', '$email', '$password', '0', '$grade', '$phone', '$filename' )") or DIE(mysqli_error($conn));

?>