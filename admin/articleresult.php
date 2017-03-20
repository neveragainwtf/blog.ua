<?php
	require_once "lib/functions.php";
		$results_set = getAllArticles();

		while($row = $results_set->fetch_array())
		{
			
			include "articleForm.php"; 
		};

?>