<?php 	
	// Conditional Function
	// Can't call Conditional Function before it's definition
	// if we call display() here it wont work. 
	if (TRUE){			// If its false function doesn't exists
		function display() 
		{
			echo "Condition Function";
		}
	}
	
	// always call conditional function after its definition
	if (TRUE) display() . "<br />";	// Calling Function with condition
									// If it's false won't call

	
?>