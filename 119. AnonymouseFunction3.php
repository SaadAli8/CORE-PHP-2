<?php
	// Anonymous Function
	function disp($a_fun){
		return $a_fun();	// $a_fun contains an anonymouse function we are calling it here
	}
	echo disp(function(){
		return "GeekyShows";
		
	});
	
	// When we pass function it assigns to parameter 
	/* $a_fun = function(){
		return "GeekyShows";
		
	}; */
	
	
?>