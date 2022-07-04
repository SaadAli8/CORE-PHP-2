<?php
	// Scalar Type Declaration 
	// Coercive Mode
	function add(int $a, int $b)
	{
		echo '$a is ' . gettype($a) . " type variable and value = $a <br />";
		echo '$b is ' . gettype($b) . " type variable and value = $b <br />";
		return $a + $b;
	}
	 echo add(2, 4);			// 6
	// echo add(2.5, 1.2);		// 3
	// echo add(2, "Hello");	// Error must be type integer
	// echo add(2, "20");		// 22
	// echo add(2, "20 Hello");	// Notice: A non well formed numeric value encountered in 22
	 
?>