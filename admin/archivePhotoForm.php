<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
	<title></title>
</head>
<body>	


	<div class="photoBox"  >
		
		<?php 
		if($row['photo'] != '') {
		

				echo "<p><img src=photo/".$row['photo']."> </p>";
				echo "<a href='http://zxc.blog.ua/blog.php#".$row['id']."'></a>";
			
		
		}
		?>
		
	 </div>


</body>
</html>