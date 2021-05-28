<?php
include "koneksi.php";
	if (isset($_POST['Simpan']))
	{
		$nama = $_POST['nama'];
		$kelas = $_POST['kelas'];
		$nbi = $_POST['nbi'];
		$alamat = $_POST['alamat'];
		$umur = $_POST['umur'];
		
		$q = "insert into tb_faiz values ('".$nama."', '".$kelas."', '".$nbi."', '".$alamat."', '".$umur."')";
		$r= mysql_query($q) or die (mysql_error());
		
		if($r) {header("location:tampildata.php");}
		else { $msg = "Data gagal Dimasukan";}
		
	}
?>

<form action = "tambah.php" method="POST">
	<fieldset>
		<legend>TAMBAH NAMA</LEgend>
			<table>
			<tr>
				<td> Nama </td> <td> : </td> <td><input type = "text" name="nama" size="10"></td>
			</tr>
			
			<tr>
				<td> Kelas </td> <td> : </td> <td><input type = "text" name="Kelas" size="10"></td>
			</tr>
			
			<tr>
				<td> NBI </td> <td> : </td> <td><input type = "number" name="nbi" size="10"></td>
			</tr>
			
			<tr>
				<td> Alamat </td> <td> : </td> <td><input type = "text" name="alamat" size="10"></td>
			</tr>
			
			<tr>
				<td> Umur </td> <td> : </td> <td><input type = "text" name="umur" size="10"></td>
			</tr>
			
			<tr>
				<td>  </td> <td>  </td> <td><input type = "submit" name="Simpan" value="Simpan"></td>
											<td><input type = "Reset" name="Reset"></td>
			</tr>
		</fieldset>
</form>
