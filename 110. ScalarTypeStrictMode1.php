<?php
	declare(strict_types=1); // Enabling Strict Mode
	// Scalar Type Declaration 
	// Strict Mode
	function add(int $a, int $b)
	{
		echo '$a is ' . gettype($a) . " type variable and value = $a <br />";
		echo '$b is ' . gettype($b) . " type variable and value = $b <br />";
		return $a + $b;
	}
	 echo add(2, 4);				// 6
	// echo add(2, "Hello");		// Error must be type integer
	// echo add(2, "20");			// Error must be type integer
	// echo add(2, "20 Hello"); 	// Error must be type integer
	// echo add(2.5, 1.2);			// Error must be type integer
?>