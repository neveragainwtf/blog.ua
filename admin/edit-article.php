<?php
	require_once "start.php";
	if (isset($_POST['button_editarticle'])) {
		$success = updateArticle ($_POST['title'], $_POST['intro_text'], $_POST['full_text']);
	}
?>	
<!DOCTYPE html>
<html>
<head>
	<title>Редагувати статтю</title>
</head>
<body>
	<?php
		require_once "blocks/menu.php";
		if ($success) {
			echo "Статтю успішно відредаговано";
			$success = false;
		}
	?>

	<div>
		<form name="namearticle" method="post" action="">
			<div>
			Назва : <br> <input type="text" name="title"  />
			</div>
			<p>
			<input type="submit" name="find_article" value="Додати нову статтю" />
			</p>
		</form>
	</div>
	<br>
<?php
	if (isset($_POST['find_article'])) {
		$row = findArticle ($_POST['title']);		
	}
?>

	
</body>
</html>