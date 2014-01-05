<?php

	include("included.php");
	include("login.php"); 
	
	$user = $_SESSION['user'];
	$id = $_GET['id'];
	
	// pull current list of members in activity
	$results = mysqli_query($conn, "SELECT * FROM `activities` WHERE `id`=$id LIMIT 1");
	
	$event = mysqli_fetch_array($results);
		$users = $event['users'];
		$curr = $event['curr'];
		
	 // check that event has space
	 if($event['curr'] >= $event['limit']){
		 header("Location: members_home.php"); 
		 die;	
	 }
		
	 // append current user to list of members
	 $users = $users.",$user";
	 
	 // increment counter
	 $curr ++;
	 
	 // save to database
	 mysqli_query($conn, "UPDATE `activities` SET `users`='$users', `curr`='$curr' WHERE `id`=$id LIMIT 1");
	 
	 // redirect to members page
	 header("Location: members_home.php"); 
	 die;	

?>