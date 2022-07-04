<?php
	// Returning Errors from Functions
	echo "First Line <br />";
	function disp($a)
	{
		if ($a <= 10) {
			echo "$a <br />";
			return TRUE;
		}
		else
			return FALSE;
	}
	disp(23) or die ("Error: Enter Valid Number");
	echo ("Rest of the Code");
?>