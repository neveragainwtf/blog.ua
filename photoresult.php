<?php
	require_once "lib/functions.php";
		$results_set = getAllPhoto(); 
		while($row = $results_set->fetch_array())
		{
			include "archivePhotoForm.php"; 
		};

?>