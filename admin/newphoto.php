<?php
	require_once "start.php";
	require_once "../lib/functions.php";
	session_start();
	if (isset($_POST['button_newphoto'])) {
			$photo = $_FILES["photo"];
			$title = $_POST["title"];
			if (isSecurityPhoto($photo)) {
				echo "vse gud!";
				loadPhoto ($photo, $title);
			}
			else {/*$message = "Помилка завантаження фото";
			unset($message);*/
			echo "vse ploho!";
			loadPhoto ($photo, $title);
			}
		}


?>	


<!DOCTYPE html>
<html>
<head>
	<title>Додати фото</title>
</head>
<body>
	<?php
		require_once "blocks/menu.php";
		if ($success) {
			echo "Статтю успішно додано";
			$success = false;
		}
	?>
	<div>
		<form name="newphoto" method="post" action="newphoto.php" enctype="multipart/form-data"><br>
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
</body>
</html>
