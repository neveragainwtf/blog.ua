<?php
	require_once "start.php";
	if (isset($_POST['button_newarticle'])) {
		$success = addArticle ($_POST['title'], $_POST['intro_text'], $_POST['full_text']);
	}
?>	
<!DOCTYPE html>
<html>
<head>
	<title>Додати нову статтю</title>
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
</body>
</html>