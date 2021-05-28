<?php 
	
	$namedir = "whatever";

	$isset = rmdir($namedir);

	if ($isset) {
		echo "dir has been removed";
	}else {
		echo "failed to remove $namedir";
	}

?>