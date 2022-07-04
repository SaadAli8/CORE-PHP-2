<?php
		$filename = "geek.txt";
		// echo file_exists($filename) it will return 1 if found
		if (file_exists($filename))
		{
			echo "$filename File is there";
		}
		else 
		{
			echo "File not found!";
		}
?>