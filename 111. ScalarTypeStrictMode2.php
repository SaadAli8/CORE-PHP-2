<?php
	declare(strict_types=1); // Enabling Strict Mode
	// Scalar Type Declaration 
	// Strict Mode
	function add(string $a, string $b)
	{
		echo '$a is ' . gettype($a) . " type variable and value = $a <br />";
		echo '$b is ' . gettype($b) . " type variable and value = $b <br />";
		return $a . $b;
	}
	// echo add(2, 4);				// Error must be type String
	// echo add(2, "Hello");		// Error must be type String
	// echo add(2, "20");			// Error must be type String
	// echo add(2, "20 Hello"); 	// Error must be type String
	// echo add(2.5, 1.2);			// Error must be type String
	echo add("Hello ", "GeekyShows");	// Hello Geekyshows
?>