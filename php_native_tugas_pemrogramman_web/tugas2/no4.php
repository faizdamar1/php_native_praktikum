<?php 

$suhu_str1 = "28.3 derajat Celcius";

echo "Tipe String : ".$suhu_str1."<br>";
var_dump($suhu_str1);

settype($suhu_str1, "double");
echo "Tipe Double : ".$suhu_str1."<br>";
var_dump($suhu_str1);

settype($suhu_str1, "integer");
echo "Tipe Integer : ".$suhu_str1."<br>";
var_dump($suhu_str1);

settype($suhu_str1, "string");
echo "Tipe String : ".$suhu_str1."<br>";
var_dump($suhu_str1);

settype($c, "double");
$c = $a + $b;
echo "<h1> $c </h1>";
?>