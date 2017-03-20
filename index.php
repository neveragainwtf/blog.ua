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
			<li><a href="archphoto.php" >Про автора</a></li>
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
		<!--<div id="description">
			<h2>Мій Блог!</h2>
			<h3>Шановний читачу, вітаю тебе у моєму блозі. Тут я розповідаю про події в моєму житті.<br>
				Сподіваюся тобі вони будуть цікавими і ти з нетерпінням будеш чекати нових :)
			</h3>
		</div>-->
		<!--<div class="banner">
			<img src="images/baner1.jpg">
		</div>-->
					<!-- banner -->
				<div class="banner">
				<div class="container">
					<div class="banner-info">
						<h2>NEW BRANDING STYLE</h2>
						<p>see our new graphic design collection</p>
						<div class="more">
							<a href="#">Learn More</a>
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