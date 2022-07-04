<?php

	$handle = fopen("geek.txt", "r");
	if ($handle){
		echo "File Opened";
	}
	else {
		echo "Couldn't Open File";
	}

?>