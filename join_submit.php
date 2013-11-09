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
	
	mysqli_query($conn, "INSERT INTO `user`(`studentid`, `name`, `lastName`, `email`, `password`, `hours`, `grade`, `phone`) VALUES ('$id', '$firstName', '$lastName', '$email', '$password', '0', '$grade', '$phone')") or DIE(mysqli_error($conn));

?>