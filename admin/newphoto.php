<?php
	require_once "start.php";
	require_once "../lib/functions.php";
	session_start();
	if (isset($_POST['button_newphoto'])) {
			$photo = $_FILES["photo"];
			$title = $_POST["title"];
			if (isSecurityPhoto($photo)) {
				loadPhoto ($photo, $title);
				$success = true;
			}
			else {/*$message = "Помилка завантаження фото";
			unset($message);*/
			// echo "vse ploho!";
			loadPhoto ($photo, $title);
			}
		}
?>	

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Додати фото</title>

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
					echo "<p style='margin: 35px; color: red; font-size:19px;'>Фото успішно додано</p>";
					$success = false;
				}
			?>
			<div id="marLeft">
				<form name="newphoto" method="post" action="newphoto.php" enctype="multipart/form-data">
				<p>
					Назва : <input type="text" name="title" />
				</p>
				<p>
					<input type="file" name="photo"><br>
				</p>
				<p>
					<input type="submit" name="button_newphoto" value="Додати фото" />
				</p>	
				</form>
			</div>
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
