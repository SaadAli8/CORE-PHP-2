<?php
	// Anonymous Function
	function disp($str){
		return function ($a_str) use($str){
					echo $str ." " . $a_str;
				};
	}
	$a = disp("Hello");
	
	$a("GeekyShows");


	
	
?>