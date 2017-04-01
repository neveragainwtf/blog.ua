<?php
	require_once "start.php";
	if (isset($_POST['button_newarticle'])) {
		$success = addArticle ($_POST['title'], $_POST['intro_text'], $_POST['full_text']);
	}
?>	
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Додати нову статтю</title>

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
		if ($success) {
			echo "<p style='margin: 35px; color: red; font-size:19px;'>Статтю успішно додано</p>";
			$success = false;
		}
	?>
	<div id="marLeft">
		<form name="newarticle" method="post" action="">
		<div>
			Назва : <br> <input type="text" name="title" />
		</div>
		<div>Вступ:<br />
			<textarea name="intro_text" cols="40" rows="10" ></textarea>
		</div>
		<div>Повний текст:<br />
			<textarea name="full_text" cols="40" rows="10" ></textarea>
		</div>
		<p>
			<input type="submit" name="button_newarticle" value="Додати нову статтю" />
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