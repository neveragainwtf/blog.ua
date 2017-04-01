<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../admin/adm_style.css">
	<title></title>
	<style type="text/css">
		

		table {
			width: 60%;
			margin-left: 20%;
			font-size: 20px;
		}

		td {
			width: 25%;
			background-color: #d2d2d2;
			padding-left: 20px;

		}
	</style>
</head>
<body>		
	<table id="usersTable">			 
	  	<tr>
	    	<td><?php echo $row['id']; ?></td>
	    	<td><?php if($row['avatar'] == '') {
				echo( "<img  style='width: 56px; height: 56px;' src=../avatars/default.gif>");
				}else {
				echo( "<img  style='width: 56px; height: 56px;' src=../avatars/".$row['avatar'].">");
				}; ?>							
			</td>
	    	<td><?php echo $row['login']; ?></td>
	    	<td>
	    		<?php
	    		if($row['admin'] == 1) {
				echo"Адміністратор";
				}else {
				echo"Користувач";
				};
				?>
	    	</td>
	  	</tr>	  	
	</table>	
</body>
</html>

