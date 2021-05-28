<?php 

	$kalimat = "aku mau makan sate dan makan soto";
	echo $kalimat." menggunakan exploade() = ";
	var_dump(explode(" ", $kalimat));
	echo "<br>";
	
	$kalimat1 = "123456";
	echo $kalimat1." mnggunakan str_split()";
	var_dump(str_split($kalimat1));

?>