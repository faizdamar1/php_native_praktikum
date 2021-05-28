<?php 

$nama1 = "    faiz    ";
$nama2 = "faiz";

echo "nama yang belum di beri fungsi trim() = $nama1, dan nama yg normal $nama2 <br>";
//yang di keluarkan saat di trim() atau belum tidak akan nampak pada browser.
if($nama1 == $nama2){
	echo "nama sama ...";
}else{
	echo "nama beda...";
}

echo "<br>";

echo "nama yang belum di beri fungsi trim() = $nama1, dan nama yg normal $nama2 <br>";

if(trim($nama1) == trim($nama2)){
	echo "nama sama...";
}else{
	echo "nama beda...";
}

echo "<br> <hr>";
$kata = "3 buah";
echo "sebelum di trim() $kata <br>";
echo "sesudah di trim() ".trim($kata,"0..9");


echo "<br><hr>";

$kata2 = "aku___";

echo "sebelum = $kata2 <br>";
echo rtrim($kata2,"_");

?>