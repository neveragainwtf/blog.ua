<?php
require_once "../lib/functions.php";
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin-панель</title>
</head>
<body>
	<h1>Admin-панель</h1>
	<?php
	$avatar = getAvatar($_SESSION['login']);
	if ($avatar == "") $avatar = "default.gif";
		echo "<div id='avatar'><img style='width: 56px'; src='../avatars/$avatar' /></div>";
		echo "<div id='sesLoggin'>Привіт, ".$_SESSION['login']."!</div><hr>";
		// echo "<a href='../editavatar.php' title ='Змінити аватар'>Змінити аватар </a>";
		// echo "<p><a href = '../admin/index.php' title = 'admin-panel'>Керування</a></p>";
		// echo "<p><a href = 'logout.php' title = 'Вихід'>Вихід</a></p>";
	?>
	<!-- <hr> -->
	<h2 style="margin: 5px;">Меню:</h2>
	<div id="admMen">
		<!-- <a href="index.php">Головна</a><br>
		<a href="../index.php">Повернутися до блогу</a><br> -->
		<a href="newarticle.php">Додати нову статтю</a>
		<a href="edit-article.php">Редагувати статтю</a>
		<a href="newphoto.php">Додати фото</a>
		<a href="deletePhoto.php">Видалити фото</a>
		<a href="deleteArticle.php">Видалити статтю</a>
		<a href="addAdmin.php">Надати права адміністратора</a>
		<a href="rmvAdmin.php">Вилучити права адміністратора</a>
		<a href="../logout.php">Вихід</a>
	</div>
		<!-- <hr> -->
	</body>
</html>	