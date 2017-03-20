<?php
	session_start();
	require_once('../lib/functions.php');

	$login = htmlspecialchars($_POST['login']);
	$password = htmlspecialchars($_POST['password']);
	$password = md5($password);
	if (checkUser($login, $password) && isAdmin($login)) {
		$_SESSION['login'] = $login;
		$_SESSION['password'] = $password;
		header("Location: /admin/index.php");
	}
	else {
		$_SESSION['error_auth'] = 1;
		echo "Невірний логін або пароль.";
	}
	exit;
?>