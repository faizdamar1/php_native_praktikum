<?php
	include "koneksi.php";
	$sql = "SELECT * FROM tb_faiz";
	$res = mysql_query($sql,$konek) or die (mysql_error());
?>
<HTML>
	<HEAD>
	</HEAD>
<BODY BGCOLOR="white">
<h1><center>DAFTAR NAMA </CENTER></H1>
<table border="1" width="200" cellpadding="1" ALIGN="center">
	<tr bgcolor="yellow" align="center">
		<th> NO </th>
		<th> nama </th>
		<th> kelas </th>
		<th> nbi </th>
		<th>alamat </th>
		<th> umur </th>
		<th> EDIT </th>
		<th> HAPUS </th>
	</TR>

<?php
	$i = 1;
	while($data = mysql_fetch_array($res))
	{
		if ($i%2==0) $bg='yellow' ; else $bg='cyan';
			echo "<tr bgcolor ='".$bg."'>
				<td>".$i."</td>
				<td>".$data["nama"]."</td>
				<td>".$data["kelas"]."</td>
				<td>".$data["nbi"]."</td>
				<td>".$data["alamat"]."</td>
				<td>".$data["umur"]."</td>
				<td><a href='edit.php?kode=".$data[0]."'>Edit</a></td>
				<td><a href='hapus.php?kode=".$data[1]."'>Hapus</a></td>
				</tr>"; $i++;
	}
?>
  
</table><center>
 <table>
<tr>
<td><a href="tambah.php">Tambah Data</a></td><td><a href="Index.php">KEMBALI</a></td><tr></center></table>
</BODY>
</html>
