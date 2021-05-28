<?php 
//addslhase berfungsi untuk menambahkan karakter slash ketika terdapat karakter ' " dan \

$nama = "jum'at";
$nama_db = addslashes($nama);

echo "nama yang di input = $nama <br>";

echo "nama yang di masukan di database = $nama_db";

?>