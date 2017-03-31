<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
	<title></title>
</head>
<body>	
	

		

	<div class="newsBox">
		
		<?php 
		if($row['photo'] != '') {
		echo "<p><img src=photo/".$row['photo']."> </p>";
		echo "<label style='font-size:24px; '>".$row['title'];"</label>";
		echo "<a href='http://zxc.blog.ua/blog.php#".$row['id']."'><br><br><label>Читати...</label></a>";
		}
		?>
		
	 </div>
			

	
</body>
</html>