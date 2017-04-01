<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php 
echo "
		<div id='marLeft'>
				<form name= 'editrticle' method='post' action=''>
			<div>
				Назва : <br> <input type='text' name='title' value=".$t1." />
			</div>
			<div>Вступ:<br />
				<textarea name='intro_text' cols='40' rows='10'  >".$t2."</textarea>
			</div>
			<div>Повний текст:<br />
				<textarea name='full_text' cols='40' rows='10'  >" .$t9. "</textarea>
			</div>
			<p>
				<input type='submit' name='button_editarticle' value='Зберегти зміни' />
			</p>	
			</form>
		</div> ";
?>
</body>
</html>
