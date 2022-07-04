<?php

	$handle = fopen("geek.txt", "r");
	// echo fgets($handle); it will read most top line of file
	while (!feof($handle)) 
	{
		$data = fgets($handle);
		echo "$data <br />";
	}
	fclose($handle);

?>