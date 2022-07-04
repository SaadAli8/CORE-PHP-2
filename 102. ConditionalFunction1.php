<?php 	
	// Conditional Function
	// Can't call Conditional Function before its defination
	// if we call display() here it wont work. 
	if (TRUE){			// If its false function doesn't exists
		function display() 
		{
			echo "Condition Function";
		}
	}
	
	// always call conditional function after its defination
	display() . "<br />";	// Calling Function

	
?>