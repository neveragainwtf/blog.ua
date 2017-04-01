<?php
	
	require_once "start.php";
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Список зареєстрованих користувачів</title>

	<link rel="stylesheet" type="text/css" href="adm_style.css">


</head>
<body>
	<div id="wrapper">
		<div id="header">
			<ul>				
				<li><img src="../images/emb.jpg" id="embleme"></li>
				<li><a href="../index.php" >Головна</a></li>
				<li><a href="../blog.php" >Блог</a></li>
				<li><a href="../archphoto.php" >Архів фото</a></li>
				<li><a href="../aboutAuthor.php" >Про автора</a></li>
				<li><a href = '../logout.php' title = 'Вихід'>Вихід</a></li>
			</ul>			
		</div>
		<div id="content">
				
		
			<?php require_once "blocks/menu.php";?>
			<div>
				<table id="viewUsersTable">
			  	<tr>
			    	<td><b>Id</b></td>
			    	<td><b>Аватар</b></td>
			    	<td><b>Логін</b></td>
			    	<td><b>Права доступу</b></td>
			  	</tr>
			  	<?php require_once "usersresult.php";?>			  	
			</table>
								
			</div>
		</div>
		<div id="footer">
			<div id="social">
				<a href="https://vk.com"><img src="../images/footVK.jpg" alt="ВКонтакті" class="footPictVk"></a>
				<a href="https://www.google.com.ua"><img src="../images/footGoog.jpg" alt="Google+" class="footPictGp"></a>
				<a href="https://www.youtube.com/"><img src="../images/footYT.jpg" alt="YouTube" class="footPictYt"></a>
			</div>
		</div>
	</div>
</body>
</html>