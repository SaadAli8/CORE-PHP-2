<?php
	// Return Type Declaration 
	// Coercive Mode
	function add(int $a, int $b) : int
	{
		echo '$a is ' . gettype($a) . " type variable and value = $a <br />";
		echo '$b is ' . gettype($b) . " type variable and value = $b <br />";
		return $a + $b;
	}
	// echo add(2, 4);				// 6
	// echo add(2.5, 1.2);			// 3
	// echo add(2, "Hello");		// Error must be type Integer
	// echo add(2, "20");			// 22
	// echo add(2, "20 Hello"); 	// Error must be type Integer 22
	// echo add("Hello ", "GeekyShows");	// Error must be type Integer
?>