<?php

function __autoload($class_name){
	include 'classes/'.$class_name.'.php';
}

$jumlah = new penjumlahan_autoload(10,20);
$ngurang = new pengurangan_autoload(20,10);

echo $jumlah->jumlah();
echo "<br>";
echo $ngurang->ngurang();

?>