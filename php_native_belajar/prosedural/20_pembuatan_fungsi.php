<?php 

	function perkalian ($angka1 , $angka2)
	{
		$a = $angka1;
		$b = $angka2;

		$hasil = $a * $b;
		return $hasil;
	};	

	$hasill = perkalian(10,5);
	echo "perkalian dengan fungsi = ".$hasill;

?>