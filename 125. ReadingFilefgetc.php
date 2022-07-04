<?php

	$handle = fopen("geek.txt", "r");
	// echo fgetc($handle); it will read one character
	/* It will work fine but It can't handle new line 
	while ($char = fgetc($handle))
	{
		echo $char;
	}
	*/
	while ($char = fgetc($handle))
	{
		if($char == "\n")
		{
			$char = "<br />";
		}
		echo $char;
	}
	
	fclose($handle);
?>