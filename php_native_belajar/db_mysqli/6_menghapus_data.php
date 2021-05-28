<?php 
require_once('1_mysqli_connect.php');
$link;

$query = "DELETE FROM murid WHERE id IN (2,6)";

if (mysqli_query($link,$query)) {
	echo "berhasil di hapus";
}else{
	echo "gagal menghapus";
}

mysqli_close($link);
?>