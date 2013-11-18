<?php

include("included.php");

if($_SESSION['user']){
	session_unset($_SESSION['user']);
	header("Location: members.php");
	die;
}

?>