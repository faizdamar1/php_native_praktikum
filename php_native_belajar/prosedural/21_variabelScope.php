<?php 

$a = 10;

function coba(){

	global $a;
	global $b;

	$b = 20;

	echo "ini keluar dari dalam fungsi coba, var a = $a <br>";
	echo "ini keluar dari dlaam fungsi coba, var b = $b <br>";
}

coba();

echo "ini mengakses dari luar fungsi, var a = $a <br>";
echo "ini mengakses dari luar fungsi, var b = $b <br>";

 ?>