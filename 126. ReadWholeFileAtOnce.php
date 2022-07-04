<?php
	/* It will work fine but It can't handle new line 
	$data = file_get_contents("geek.txt");
	echo $data;
	*/
	
	// $data = file_get_contents("http://www.geekyshows.com");
	$data = file_get_contents("geek.txt");
	$impdata = str_replace("\n", "<br />", $data);
	echo $impdata;
	
	// no need to use fclose becoz no file opened 
?>