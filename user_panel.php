<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php
	if (checkUser($_SESSION['login'], $_SESSION['password'] && (isAdmin($_SESSION["login"])))) {
		$avatar = getAvatar($_SESSION['login']);
		if ($avatar == "") $avatar = "default.gif";
		echo "<div id='avatar'><img src='avatars/$avatar' /></div>";
		echo "<div id='sesLoggin'>Привіт, ".$_SESSION['login']."!</div><hr>";
		echo "<a href='editavatar.php' title ='Змінити аватар'>Змінити аватар </a>";
		echo "<p><a href = '../admin/index.php' title = 'admin-panel'>Керування</a></p>";
		echo "<p><a href = 'logout.php' title = 'Вихід'>Вихід</a></p>";
	}
	elseif (checkUser($_SESSION['login'], $_SESSION['password'])) {
		$avatar = getAvatar($_SESSION['login']);
		if ($avatar == "") $avatar = "default.gif";
		echo "<div id='avatar'><img src='avatars/$avatar' /></div>";
		echo "<div id='sesLoggin'>Привіт, ".$_SESSION['login']."!</div><hr>";
		// echo "<br />";
		echo "<a href='editavatar.php' title ='Змінити аватар'>Змінити аватар </a>";
		echo "<p><a href = 'logout.php' title = 'Вихід'>Вихід</a></p>";
	}
	else {
		if ($_SESSION['error_auth'] == 1) {
			echo "<p><span style = 'color: red;'>Некоректний дані</span></p>";
			unset($_SESSION['error_auth']);
		}
	 require_once "formlogin.html";
	}
?>


</body>
</html>