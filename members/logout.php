<?php

include("../included.php");
include("login.php");
if($_SESSION['user']){
	session_unset($_SESSION['user']);
	header("Location: index_home.php");
	die;
}

?>