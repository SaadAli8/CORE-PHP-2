<?php
	// Return Type Declaration 
	// Coercive Mode
	function add(float $a, float $b) : int
	{
		echo '$a is ' . gettype($a) . " type variable and value = $a <br />";
		echo '$b is ' . gettype($b) . " type variable and value = $b <br />";
		return $a + $b;
	}
		echo add(2.5, 1.2);			// Return Integer 3
	//	echo add(2, 4);				// Return Interger 6
	// echo add(2, "Hello");		// Error must be type Float
	// echo add(2, "20");			// Return Integer 22
	// echo add(2, "20 Hello"); 	// Error must be type Integer 22	 
	// echo add("Hello ", "GeekyShows");	// Error must be type Float
?>