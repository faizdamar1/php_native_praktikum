<?php 

	$string = "iam telling you";

	echo "this is string = $string <br>";
	var_dump($string);
	echo "<br>";
	$string_array = explode(" ", $string);
	echo "this is array = ";
	var_dump($string_array);
?>