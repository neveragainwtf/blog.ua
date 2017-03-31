<?php
	require_once "start.php";
	require_once "../lib/functions.php";

	
	
	
?>	
<!DOCTYPE html>
<html>
<head>
	<title>Надати права адміністрування</title>
	
</head>
<body>
	<?php
		require_once "blocks/menu.php";
		
			if (isset($_POST['add_Adm'])) {
			$results_set = giveAdmRight ($_POST['login']);
			echo "Права успішно надано";
				$results_set = false;


		}
	?>
	<div>
		<form name="addAdmin" method="post" action="">
		<p>
			Ім'я користувача : <input type="text" name="login" />
		</p>
		<p>
			<input type="submit" name="add_Adm" value="Надати права адміністратора" />
		</p>	
		</form>
	</div>
</body>
</html>