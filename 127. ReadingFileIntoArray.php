<?php
	/*	
	$data = file("geek.txt");
	echo $data[0] . "<br />";
	echo $data[1] . "<br />";
	echo $data[2] . "<br />";
	*/
	$data = file("geek.txt");		
	foreach($data as $line)			
	{
		echo $line . "<br />";
	}

	// Display with Line Number 
	$data = file("geek.txt");		
	foreach($data as $num => $line)			
	{
		echo "Line $num : $line  <br />";
	}	
	
	// no need to use fclose becoz no file opened 
?>