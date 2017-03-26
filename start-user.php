<?php
	session_start();
	require_once "lib/functions.php";
	
	if (!((checkUser($_SESSION["login"], $_SESSION["password"])))){
		header("Location: /noniduser.php");
		exit;
	}
?>