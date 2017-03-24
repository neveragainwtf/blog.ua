<?php
	require_once "lib/functions.php";
		$results_set = getLastNews();

		while($row = $results_set->fetch_array())
		{
			
			include "lastnewsform.php"; 
		};

?>