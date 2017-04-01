<?php
	require_once "../lib/functions.php";
		$results_set = getAllUsers();

		while($row = $results_set->fetch_array())
		{
			
			include "all-users-form.php"; 
		};

?>