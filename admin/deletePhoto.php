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
	<title>Видалити фото</title>
</head>
<body>
	<?php
		require_once "blocks/menu.php";
		if ($results_set) {
			echo "Фото успішно видалено";
			$results_set = false;
		}
	?>
	<div>
		<form name="deletePhoto" method="post" action="">
		<p>
			Назва : <input type="text" name="title" />
		</p>
		<p>
			<input type="submit" name="del_photo" value="Видалити фото" />
		</p>	
		</form>
	</div>
</body>
</html>