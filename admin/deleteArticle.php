<?php
	require_once "start.php";
	require_once "../lib/functions.php";

	if (isset($_POST['button_del'])) {
		$results_set = deleteArticle ($_POST['title']);
	}
	
?>	
<!DOCTYPE html>
<html>
<head>
	<title>Видалити статтю</title>
</head>
<body>
	<?php
		require_once "blocks/menu.php";
		if ($results_set) {
			echo "Статтю успішно видалено";
			$results_set = false;
		}
	?>
	<div>
		<form name="deleteTitle" method="post" action="">
		<p>
			Назва : <input type="text" name="title" />
		</p>
		<p>
			<input type="submit" name="button_del" value="Видалити статтю" />
		</p>	
		</form>
	</div>
</body>
</html>