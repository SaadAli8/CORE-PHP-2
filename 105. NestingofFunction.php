<?php 	
		// Nesting of Function
		function outer_display()	// Outer Function 
		{
			echo "I am outer function<br />";
			function inner_display()			// Inner Function
			{
			echo "I am Inner function<br />";
			
			}	
		}
		/* calling inner function before
		   outer function will generate error
		 */
		// inner_display(); caling it here will generate error
		outer_display();	// first call outer then inner
		inner_display();
		
?>