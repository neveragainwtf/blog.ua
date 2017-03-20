<?php
	require_once "start.php";
	require_once "../lib/functions.php";	
?>	
<!DOCTYPE html>
<html>
<head>
	<title>Вилучити права адміністрування</title>
</head>
<body>
	<?php
		require_once "blocks/menu.php";

		

		if (isset($_POST['rmv_Adm'])) {
			$results_set = rmvAdmRight ($_POST['login']);
			echo "Права успішно вилучено";
				$results_set = false;
	}			
		
	?>
	<div>
		<form name="rmvAdmin" method="post" action="">
		<p>
			Ім'я користувача : <input type="text" name="login" />
		</p>
		<p>
			<input type="submit" name="rmv_Adm" value="Вилучити права адміністратора" />
		</p>	
		</form>
	</div>
</body>
</html>