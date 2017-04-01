<?php
	require_once "lib/functions.php";
	session_start();
	if (isset($_POST['reg'])){
		$login = htmlspecialchars($_POST['login']);
		$password = htmlspecialchars($_POST['password']);
		$bad = false;
		unset ($_SESSION['error_login']);
		unset ($_SESSION['error_password']);
		unset ($_SESSION['reg_success']);
		unset ($_SESSION['login_busy']);
		if ((strlen($login) < 5) || (strlen($login) > 32)) {
			$_SESSION['error_login'] = 1;
			$bad = true;

		}
		if ((strlen($password) < 5) || (strlen($password) > 32)) {
			$_SESSION['error_password'] = 1;
			$bad = true;
		}
		if(loginFree($login) == $login){
			$_SESSION['login_busy'] = 1;
			$bad = true;
		}

		if (!$bad) {
			regUser ($login, md5 ($password));
			$_SESSION['reg_success'] = 1;
			// header("Location: index.php");
		}

	}
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Реєстрація</title>

	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	

	<!-- <h1>Реєстрація</h1> -->
<div id="wrapper">
	<div id="header">
		<ul>
			<li><img src="images/emb.jpg" id="embleme"></li>
			<li><a href="index.php" >Головна</a></li>
			<li><a href="blog.php" >Блог</a></li>
			<li><a href="archphoto.php" >Архів фото</a></li>
			<li><a href="aboutAuthor.php" >Про автора</a></li>
			<li><a href="reg.php" >Реєстрація</a></li>	
			<li><div><a href="javascript:collapsElement('authForm')" rel="nofollow">Авторизація</a>
					<div class="dropdown-content">
						<div id="authForm" style="display: none">
							<?php
								require_once "user_panel.php";
							?>
						</div>
					</div>					
				</div>
			</li>
		</ul>
	</div>
	<!-- func -->
	<script>
	 	function collapsElement(authForm) {
	 		if ( document.getElementById(authForm).style.display != "none" ) {
	 		document.getElementById(authForm).style.display = 'none';
	 		}
	 	else {
	 		document.getElementById(authForm).style.display = '';
	 		}
	 	}
	</script>
	<div id="content">
		<div id="regForm">
			<img src="images/regFrom1-photo.jpg"><br>
			<form id="form1" action="" method="post" >
			<?php
				if ($_SESSION['login_busy'] === 1) echo "<p><span style = 'color: red;'>Логін уже використовується</span></p>";
				if ($_SESSION['error_login'] === 1) echo "<p><span style = 'color: red;'>Некоректний логін</span></p>";
				if ($_SESSION['error_password'] === 1) echo "<p><span style = 'color: red;'>Некоректний пароль</span></p>";
				if ($_SESSION['reg_success'] === 1) echo "<p><span style = 'color: red;'><b>Реєстрація пройшла успішно</b></span></p>";
				unset($_SESSION['error_login']);
				unset($_SESSION['login_busy']);
				unset($_SESSION['error_password']);
				unset($_SESSION['reg_success']);
			?>					
				<label>Ваш логін:</label><br>
				<input type="text" name="login" placeholder="Мінімум 5 символів" /><br>	
				<label>Ваш пароль:</label><br>
				<input type="password" name="password" placeholder="Мінімум 5 символів" /><br>			
				<input id="styleButtReg" type="submit" name="reg" value="Зареєструватися" />   
					
			</form>
		</div>
	</div>
	<div id="footer">
		<div id="social">
			<a href="https://vk.com"><img src="images/footVK.jpg" alt="ВКонтакті" class="footPictVk"></a>
			<a href="https://www.google.com.ua"><img src="images/footGoog.jpg" alt="Google+" class="footPictGp"></a>
			<a href="https://www.youtube.com/"><img src="images/footYT.jpg" alt="YouTube" class="footPictYt"></a>
		</div>
	</div>	
</div>

</body>
</html>