<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
	<title></title>
</head>
<body>	


	<div class="photoBox"  >
		<!-- <a style="color: black;" href="../blog.php"> -->
		<?php 
		if($row['photo'] != '') {
		echo "<p><img onclick='myFunction()' src=photo/".$row['photo']."> </p>";
		// echo "<label> ".$row['title'];"</label>";
		}
		?>
		</a>
	 </div>


</body>
</html>