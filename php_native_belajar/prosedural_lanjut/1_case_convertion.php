<?php 

$nama1 = "faiz";
$nama2 = "FAIZ";

if(strtolower($nama1) == strtolower($nama2)){
	echo "nama sama<br>";
	echo "nama $nama2 bila di strtolower menjadi = ".strtolower($nama2);
	echo "<br>";
	echo "nama $nama1 bila di strtoupper menjadi = ".strtoupper($nama1);
}else{
	echo "nama tidak sama";
}

?>