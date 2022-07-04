<?php
	// Anonymous Function
	$y = 34;		// Global Variable
	$r = 10;		// Global Variable
	$a = function($p) use($r){
		echo "Anonymous Function $p $r";
	};
	
	$a($y);
	
	
?>