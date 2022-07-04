<?php
		$handle = fopen("geek.txt", "r");
		$data = fread($handle, filesize("geek.txt"));
		$impdata = str_replace("\n", "<br />", $data);
		echo $impdata;
		fclose($handle);
?>