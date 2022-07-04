<?php

	$handle = fopen("geek.txt", "r");
	while (!feof($handle)) 
	{
		$data = fgets($handle);
		echo "$data <br />";
	}
	fclose($handle);

?>