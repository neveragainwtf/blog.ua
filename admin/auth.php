<?php
	session_start();
	require_once "../lib/functions.php";
	if (checkUser($_SESSION["login"], $_SESSION["password"] && isAdmin($login))) {
		header("Location: /admin/index.php");
		exit;
	}
	else {
		header("Location: /index.php");
		exit;
	}
	
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Вхід в Адмін-панель!</title>
	
</head>
<body>
	<div>
	
		<form name="auth" action="auth1.php" method="post">
		<label>Логін</label><br>
		<input type="text" name="login" /><br>
		<label>Пароль</label><br>
		<input type="password" name="password" /><br>
		<input type="submit" name="button_auth" value="Ввійти" />			
		</form>
	</div>

</body>
</html>