<?php
	require_once "lib/functions.php";
	session_start();
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Блог!</title>

	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script src="js/parallax.min.js"></script>
</head>
<body>
	<?php
		if ($_SESSION['reg_success'] == 1) {
			echo "<span style='color: red;'>Реєстрація пройшла успішно!</span>";
			unset($_SESSION['reg_success']);
		}
	?>

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
			<!-- banner -->
		<div class="banner">
		<div class="container">
			<div class="banner-info">
				<h2>Блог Мандрівника</h2>
				<pre>
                Привіт, шановний мандрівнику. Якщо ти весела та енергійна людина,
            яка любить подорожувати та постійно відкривати для себе щось цікаве
    і нове, вітаю, ти звернувся за адресою.Тисни на кнопку "Читати", та
 поринь у світ моїх розповідей про цікаві подорожі.</pre>				
				<div class="more">
					<a href="blog.php">Читати!</a>
				</div>	
			</div>
		</div>
		</div>		
			<!-- //banner -->
	 	<div id="navigation">
			<div id="label"><b>Зовнішні джерела:</b></div>
				<div class="navEl">
			 		<a href="http://vsviti.com.ua/nature/9476">
			 		<img src="images/11.jpg"></br>
			 		<label>Найкращі<br>пейзажі</label></a>
		 		</div>
				<div class="navEl">
					<a href="https://karabas.com/ua/">
					<img src="images/2.jpg"></br>
					<label>Головні<br>події</label></a>
				</div>
				<div class="navEl">
					<a href="https://vk.com/tvblogger">
					<img src="images/3.jpg"></br>
					<label>Спільнота<br>блогерів</label></a>
				</div>
	 		</div>
		</div>
		<div class="parallax-window" data-parallax="scroll" data-image-src="images/tDrayzer.jpg">
			<pre>         Тільки про дві речі ми будемо шкодувати на смертному одрі - що мало любили <br>      і мало подорожували 
																Марк Твен</pre>
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