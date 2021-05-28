<?php 
require_once('1_mysqli_connect.php');
$link;

$nama = "paijo";
$query = "UPDATE murid SET nama='$nama' WHERE id IN (2,5)";
if (mysqli_query($link,$query)) {
	echo "berhasil di ubah menjai $nama";
}else{
	echo "gagal menguba menjadi nama";
}

mysqli_close($link);
?>