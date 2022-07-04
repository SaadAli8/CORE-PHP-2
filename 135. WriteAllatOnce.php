<?php
		if(file_put_contents("geek.txt", " World War 3", FILE_APPEND) == FALSE)
		{
			echo "Could not write";
		}
		else
		{
			echo "Succes";
		}
?>