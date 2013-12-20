<?php	
	$allowedExtensions = array("application/pdf");
	$max_filesize = 20000;	
	$filename = $_FILES["documents"]["name"];		
	$filesize = $_FILES["documents"]["size"];
	echo $filesize;
	$extension = $_FILES["documents"]["type"];	


	 if ($_FILES["documents"]["error"] > 0) {
    		echo "Error: " . $_FILES["documents"]["error"] . "<br />";
    	}
	else if((in_array($extension, $allowedExtensions))) {					
		move_uploaded_file($_FILES["documents"]["tmp_name"],  "../docs/".$filename);				
	}
	else if($filesize > $max_filesize){
		$fileSizeFail = true;
	}
	else {                      
		$fileTypeFail = true;
	}	
	
	//header("Location: upload_docs.php?success=$fileSizeFail");
?>