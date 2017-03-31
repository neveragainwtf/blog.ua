<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
	<title></title>
</head>
<body>	
	<!-- <div id="articleBox" style=" font-family: serif; text-align: justify-all; padding: 20px 20%; font-size: 18px;"> -->
	<div id="articleBox" style=" font-family: serif; text-align: justify-all; padding: 4% 9%; font-size: 18px;">
		
		
				
		<?php 
		if($row['photo'] != '') { 
		echo " <a id=".$row['id'].">
		<p><img  style='width: 100%; height: 300px;' src=photo/".$row['photo']."> </p>
		</a>
		";
	}
		// echo "<a href='http://zxc.blog.ua/blog.php#".$row['id']."'>asdasdsa".$row['id']."</a>";
		// echo "<a id=".$row['id']." href='#'>asdasdsa</a>";
		?>
				
		<p><b><?php echo $row['title'] ?></b><br></p><p><?php echo $row['intro_text'] ?></p><p><?php echo $row['full_text'] ?></p>
		<hr>
		<div style="text-align: right;"><?php echo "Опубліковано : "; echo $row['date']; ?></div>

	</div>		
</body>
</html>

