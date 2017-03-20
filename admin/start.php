<?php
	session_start();
	require_once "../lib/functions.php";
	
	if (!((checkUser($_SESSION["login"], $_SESSION["password"])) && (isAdmin($_SESSION["login"])))){
		header("Location: /admin/auth.php");
		exit;
	}
?>