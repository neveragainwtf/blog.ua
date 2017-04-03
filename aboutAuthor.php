<?php
	require_once "lib/functions.php";
	session_start();	
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Про автора</title>

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
	<div id="content" style="margin-bottom: 0;">
		<div>
			<h2 id="sloganBlog" style=" font-size:37px; margin-top: 40px;" >Про автора</h2>
			<div id="aboutAuthor">
				<img src="images/myPic.jpg">					
				<p>						
					Мене звати Дацюк Андрій. Я люблю подорожувати, особливо в <br>компанії старих добрих друзів.	 					
				</p>
				<p>
					Я народився в звичайній сім'ї, але з дитинства був досить впевненим і цілеспрямованим, змалку
					знав чого я хочу, і вже в 15 років вилетів з батьківського  гнізда, у красиве місто Славута.
					Це було для мене, як ковток свіжого повітря, адже я мав багато мрій і ревносно рвався втілювати
					їх у життя. Таким чином я вступив у Славутський обласний спеціалізований ліцей-інтернат поглибленої підготовки
					в галузі наук, пізніше у Національний університет "Львівська політехніка".
				</p>
				<p>
					Ще до вступу в університет, окрім цікавості до комп'ютерів та музики, я виявив в собі велику
					тягу до подорожей. З часом це бажання прогресує і я не чиню йому опір, оскільки отримую 
					від подорожей велике задоволення.
				</p>
				<p>
					Також мені подобається ділитися побаченим з іншими, саме тому я і веду цей блог.					
				</p>
				<p>
					Якщо тобі цікава ще якась інформація або ти хочеш приєднатися та подорожувати зі мною
					ось посилання на мої сторінки в соц. мережах. Будьмо друзями.
					<br>
					<!-- <br> -->
					<a href="https://vk.com/neveragainwtf"><img style="width: 8%;" src="images/vkAbout.png"></a>
					<a href="https://www.facebook.com/profile.php?id=100004706172960"><img style="width: 8%;" src="images/fbAbout.png"></a>
					<a href="https://www.youtube.com/channel/UCGwN0Fe8J84A00WQSS4G2Hg"><img style="width: 8%;" src="images/ytAbout.png"></a>
					<a href="https://plus.google.com/u/0/113027364253379759278"><img style="width: 8%;" src="images/googlAbout.png"></a>	
				</p>											
			</div>		
		</div>
		<h2 id="sloganBlog" style=" font-size:37px; margin-top: 5%;" >Місця де я був</h2>		
		<div id="midlImg ">
			<img style="width: 49%;" src="images/leftimg.jpg" alt="">		
			<img style="width: 50%;" src="images/map.png" alt="">
			<div id="discrImg" >
				<p style="font-size: 29px;">
					Фото друзів
				</p>
				<p style="font-size: 29px;" >
					Моя мапа
				</p>
				<p>
				Якщо Ви "бувалий" мандрівник, ви неодмінно знаєте про те, що кожна нова подорож - це маса враженнь
				та нових знайомств. Подорожуючи україною, я фотографую красиві місця та цікавих людей, яких там зустрічаю.
				Хоча я відвідав не так багато місць я маю чимало друзів, яких зустрів мандруючи україною.
				З великою частиною цих людей, я продовжую спілкуватись до сьогодні.
				</p>
				<p>
				Це фото моєї мапи. Як і кожний мандрівник я маю мапу на якій я відзначаю місця в яких я побував.
				Вона висить в моїй кімнаті на стіні та нагадує мені про мої мандрівки. Області в яких я побував
				зафарбовані зеленим. <br>
				Раджу Вам також мати таку річ. Вона є не лише спогадом про відвідані місця, а й засобом, який
				мотивує до нових подорожей. <br>
				</p>
			</div>
		</div>
		<h2 id="sloganBlog" style=" font-size:37px; margin-top: 5%;" >Мої друзі</h2>
		<div id="friends">
			<img style="width: 54%; margin-left: 5%;" src="images/friends.jpg" alt="">
			<p>
				Я вважаю, що для хорошої мандрівки багато не потрібно. Якість подорожі не завжди відповідає
				грошам, які ти на неї витрачаєш або високій популярності місця в яке ти прямуєш.
				<br> <br> На мою думку головним фактором у визначенні якості мандрівки є компанія, з якою ти забувши 
				про все відправляєшся за новою порцією враженнь. <br>
				Хто ж допоможе в цьому краще ніж компанія старих, вірних друзів, з якими ви не один пуд солі з'їли.
				З якими переживали радість та горе, пройшли вогонь та воду. Саме з такими людьми хочеться ділити радісні
				моменти, емоції та враження від нового побаченого та старого, ще раз почутого. <br> <br>
				Цінуйте свої друзів та близьких. Це люди, до яких ви звертаєтесь завжди в першу чергу, незважаючи на те 
				з чим ви до них звертаєтесь. Хоч то хорочі чи погані новини. Довіряйте, товаришуйте, живіть!
				<br> <br> <br> <br> <br> <br><br> <br> <br> <br>	
			</p>
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