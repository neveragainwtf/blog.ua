<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
	<title></title>
</head>
<body>	
	

		

	<div class="newsBox">
		<a style="color: black;" href="../blog.php">
		<?php 
		if($row['photo'] != '') {
		echo "<p><img src=photo/".$row['photo']."> </p>";
		echo "<label> ".$row['title'];"</label>";
		}
		?>
		</a>
	 </div>
			

	
</body>
</html>