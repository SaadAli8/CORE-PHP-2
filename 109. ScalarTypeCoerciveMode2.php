<?php
	// Scalar Type Declaration 
	// Coercive Mode
	function add(string $a, string $b)
	{
		echo '$a is ' . gettype($a) . " type variable and value = $a <br />";
		echo '$b is ' . gettype($b) . " type variable and value = $b <br />";
		return $a . $b;
	}
	 //echo add(2, 4);				// 24
	// echo add(2, "Hello");		// 2Hello
	 //echo add(2, "20");			// 220
	 // echo add(2, "20 Hello");	//220 Hello
	 // echo add(2.5, 1.2);			// 2.51.2
?>