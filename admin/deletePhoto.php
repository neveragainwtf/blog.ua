<?php
	require_once "start.php";
	require_once "../lib/functions.php";

	if (isset($_POST['del_photo'])) {
		$results_set = deletePhoto ($_POST['title']);
	}
	
?>	
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Видалити фото</title>

	<link rel="stylesheet" type="text/css" href="adm_style.css">
</head>
<body>
	<div id="wrapper">
			<div id="header">
				<ul>				
					<li><img src="../images/emb.jpg" id="embleme"></li>
					<li><a href="../index.php" >Головна</a></li>
					<li><a href="../blog.php" >Блог</a></li>
					<li><a href="../archphoto.php" >Архів фото</a></li>
					<li><a href="../aboutAuthor.php" >Про автора</a></li>
					<li><a href = '../logout.php' title = 'Вихід'>Вихід</a></li>
				</ul>			
			</div>
			<div id="content">
	<?php
		require_once "blocks/menu.php";
		if ($results_set) {
			echo "<p style='margin: 35px; color: red; font-size:19px;'>Фото успішно видалено</p>";
			$results_set = false;
		}
	?>
	<div id="marLeft">
		<form name="deletePhoto" method="post" action="">
		<p>
			Назва : <input type="text" name="title" />
		</p>
		<p>
			<input type="submit" name="del_photo" value="Видалити фото" />
		</p>	
		</form>
	</div>
	<div id="footer">
			<div id="social">
				<a href="https://vk.com"><img src="../images/footVK.jpg" alt="ВКонтакті" class="footPictVk"></a>
				<a href="https://www.google.com.ua"><img src="../images/footGoog.jpg" alt="Google+" class="footPictGp"></a>
				<a href="https://www.youtube.com/"><img src="../images/footYT.jpg" alt="YouTube" class="footPictYt"></a>
			</div>
		</div>
	</div>
</body>
</html>