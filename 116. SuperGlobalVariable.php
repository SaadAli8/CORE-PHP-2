<?php
	// Super Global Variable
	$a = 10;
	$b = 20;
	
	function display()
	{
		echo $GLOBALS['a'] . "<br />";
		echo $GLOBALS['b'];		
	}
	
	display()
?>