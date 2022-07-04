<?php
		if (unlink("geek.txt"))
		{
			echo "Deleted";
		}
		else 
		{
			echo "Not possible to delete";
		}
?>