


<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
	<title></title>
</head>
<body>	
	<div id="articleBox" style=" text-align: justify-all; padding: 20px 20%; font-size: 18px;">
		
		
		<!-- <p><img style="width: 1000px; height: 300px;" src="photo/<?php //echo $row['photo'] ?> "> </p> -->			
		<?php 
		if($row['photo'] != '') { 
		echo "<p><img style='width: 1000px; height: 300px;' src=photo/".$row['photo']."> </p>";
	}
		?>			
		<p><b><?php echo $row['title'] ?></b><br></p><p><?php echo $row['intro_text'] ?></p><p><?php echo $row['full_text'] ?></p>
		<hr>
		<div style="text-align: right;"><?php echo "Опубліковано : "; echo $row['date']; ?></div>

	</div>		
</body>
</html>