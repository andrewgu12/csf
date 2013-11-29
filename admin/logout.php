<?php
	require_once("../included.php");
	
	if($_SESSION['user']){
		session_unset($_SESSION['user']);
		session_unset($_SESSION['admin']);
		header("Location: index.php");
		die;
	}
?>