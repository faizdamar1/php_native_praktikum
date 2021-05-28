<?php
	include "koneksi.php";
	$q= "DELETE FROM tb_faiz WHERE nama='".$_GET['$nama']."'";
	$r= mysql_query($q) or die (MYSQL_error());
	$d= mysql_fetch_array($r);
	header("location:tampildata.php");
?>
