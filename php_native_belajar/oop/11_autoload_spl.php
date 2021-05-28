<?php 

	spl_autoload_register(function($class_name){
		include 'classes/'.$class_name.'.php';
	});

	$penjumlahan = new penjumlahan_autoload(100,50);
	$pengurangan = new pengurangan_autoload(100,50);
	echo $penjumlahan->jumlah();
	echo "<br>";
	echo $pengurangan->ngurang();

?>