<?php
	require_once "lib/functions.php";
	session_start();
	if (isset($_POST['editavatar'])) {
			$avatar = $_FILES["avatar"];
			if (isSecurity($avatar)) loadAvatar ($avatar, $_SESSION['login']);
			else $message = "Помилка завантаження аватару";
			unset($message);
		}	
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Змінити аватар</title>

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
		<div>
			<form id="form1" action="editavatar.php" method="post" enctype="multipart/form-data"><br>
			<p>
				<input type="file" name="avatar"><br>
			</p>
			<p>
				<input type="submit" name="editavatar" value="Завантажити">
			</p>
				
			</form>
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