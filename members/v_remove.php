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
		
	 // check that event is not closed
	 if($event['date'] - (3*24*60*60) < $now && $event['close'] == 0){
		 header("Location: members_home.php"); 
		 die;	
	 }
	 
	 // remove current user from list of members
	 $users = str_replace(",$user", "", $users);
	 
	 // decrement counter
	 $curr --;
	 
	 // save to database
	 mysqli_query($conn, "UPDATE `activities` SET `users`='$users', `curr`='$curr' WHERE `id`=$id LIMIT 1");
	 
	 // redirect to members page
	 header("Location: members_home.php"); 
	 die;	

?>