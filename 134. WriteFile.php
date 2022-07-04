<?php
		$handle = fopen("geek.txt", "a"); // "a" for append
		if(fwrite($handle, " World War") == FALSE)
		{
			echo "Could not write";
		}
		else
		{
			echo "Success";
		}
		fclose($handle);
?>