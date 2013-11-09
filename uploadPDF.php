<?php
	require_once("included.php");
	$allowedExtensions = array("application/pdf");
	$max_filesize = 20000;	
	$filename = $_FILES["transcript"]["name"];		
	$filesize = $_FILES["transcript"]["size"];
	$extension = $_FILES["transcript"]["type"];
	$studid = $_POST['studid'];	

	 if ($_FILES["transcript"]["error"] > 0) {
    		echo "Error: " . $_FILES["transcript"]["error"] . "<br />";
    	}
	else if((in_array($extension, $allowedExtensions)) && ($filesize < $max_filesize)) {
		move_uploaded_file($_FILES["transcript"]["tmp_name"],  "docs/transcripts/".$filename);		
	}
	else if($filesize > $max_filesize){
		$fileSizeFail = true;
	}
	else {                      
		$fileTypeFail = true;
	}	

	mysqli_query($conn, "UPDATE `user` SET `transcript`='$filename'  WHERE `studentid`='$studid'  ") or DIE(mysqli_error($conn));
	header("Location: success.php");
?>