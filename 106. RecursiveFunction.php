<?php
	// Recursive Function
	function recur($a)
	{
		if ($a <= 10) {
			echo "$a <br />";
			recur($a + 1);	// function calling it self
		}
	}
	recur(1)	// Calling Function
?>