<?php
	   include("../included.php");
	   include("login.php");
	  if($_REQUEST['name']){
			$name = $_REQUEST['name'];
			$lastName = $_REQUEST['lastname'];
			$email = $_REQUEST['email'];
			$grade = $_REQUEST['grade'];
			$pass = $_REQUEST['pass'];
			$phone = $_REQUEST['phone'];
			$stID = $_REQUEST['studentID'];
			
			$allowedExtensions = array("image/jpg", "image/jpeg", "image/png");
			$max_filesize = 204800;
			$upload_path = "../img/members/";
			$filename = $_FILES["file"]["name"];
			$filesize = $_FILES["file"]["size"];
			$extension = $_FILES["file"]["type"];		
			
			if((in_array($extension, $allowedExtensions)) && ($filesize < $max_filesize)) {
				if ($_FILES["file"]["error"] > 0)
			    {
				    echo "Error: " . $_FILES["file"]["error"] . "<br>";
   				 }
				move_uploaded_file($_FILES["file"]["tmp_name"], $upload_path . $filename);
				$updateImage = true;				
			}
			else if($filesize > $max_filesize){
				$fileSizeFail = true;
			}
			else {                      
				$fileTypeFail = true;
			}
			if($updateImage) {
				mysqli_query($conn, "UPDATE `user` SET `image`='$filename' WHERE `studentid`='$user' LIMIT 1") or die(mysqli_error($conn));
			}
			if($pass != ""){ // change pass
				$pass = sha1($pass);
				mysqli_query($conn, "UPDATE `user` SET `name`='$name',
													   `lastName` = '$lastName',			
												`email`='$email',
												`grade`='$grade',
												`password`='$pass',
												`phone`='$phone' WHERE `studentid`='$user' LIMIT 1") or die(mysql_error());
			} else { // no change pass
				mysqli_query($conn, "UPDATE `user` SET `name`='$name',
												`lastName` = '$lastName',			
												`email`='$email',
												`grade`='$grade',
												`phone`='$phone' WHERE `studentid`='$user' LIMIT 1") or die(mysql_error());
			}
			header("Location:  index_home.php");
	  }
	  
?>