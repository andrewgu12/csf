<?php

if($_SESSION['user'] == ""){
	header("Location:  index.php");
	die;
} else {
	$user = $_SESSION['user']; // student id	
	$results = mysqli_query($conn, "SELECT * FROM `user` WHERE `studentid`='$user' LIMIT 1");
	$current = mysqli_fetch_array($results);
}

?>