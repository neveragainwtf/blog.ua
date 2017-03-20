<?php
	require_once "lib/functions.php";
	session_start();
	$login = $_POST['login'];
	$password = md5($_POST['password']);
	
	if (checkUser($login, $password)) {
		$_SESSION['login'] = $login;
		$_SESSION['password'] = $password;
	}
	else $_SESSION['error_auth'] = 1;
	header("Location: ".$_SERVER['HTTP_REFERER']);
?>