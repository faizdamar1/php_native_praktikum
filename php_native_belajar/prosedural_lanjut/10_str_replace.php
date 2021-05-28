<?php 

	$string_vok = array ("a","e","i","u","o");//kata yang di cari

	$str = "aku suka makan sonice dan sosis"; //kata yang mau di replace

	$str_replace = str_replace($string_vok, "0", $kata); //fungsi replace

	echo "kata sebelum di replace = ".$str."<br>";
	
	echo "kata sesudah di replace = ".$str_replace;

?>