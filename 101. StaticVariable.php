<?php 	
	function display() 
	{
		static $a = 0;	 	// Static Variable
		$a++;
		return $a;
	} 
	echo "Calling Static variable's Function <br />";
	echo display() . "<br />";		// $a = 1
	echo display() . "<br />";		// $a = 2
	echo display() . "<br />";		// $a = 3
	
	function disp() 
	{
		$a = 0;	 	// Not Static
		$a++;
		return $a;
	} 
	echo "Calling No Static variable's Function <br />";
	echo disp() . "<br />";		// $a = 1
	echo disp() . "<br />";		// $a = 1
	echo disp() . "<br />";		// $a = 1
?>