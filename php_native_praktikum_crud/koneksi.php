<?php
	$server="localhost";
	$uid="root";
	$pwd="";
	$db="db_1461505304";
	$konek=mysql_connect($server,$uid,$pwd) or die ("Koneksi Gagal");
	mysql_select_db($db,$konek);
	?>
