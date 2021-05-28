<?php
	include "koneksi.php";
	$q= "SELECT * FROM tb_faiz WHERE nama=".$_GET['nama'];
	$r= mysql_query($q) or die ($q);
	$d= mysql_fetch_array($r);
	
	if (isset($_POST['Simpan']))
	{
		$nama = $_POST['nama'];
		$kelas = $_POST['kelas'];
		$nbi = $_POST['nbi'];
		$alamat = $_POST ['alamat'];
		$umur = $_POST['umur'];
		
		$q= "Update tb_nama set nama='".$nama."', kelas='".$kelas."', nbi='".$nbi."', alamat='".$alamat."', umur='".$umur."'  WHERE kode='".$_GET['kode']."'";
		$r= mysql_query($q) or die (mysql_error());
		
		if($r) { header("location:index.php");}
		
	}
?>

<form action = "edit.php?kode=<?php echo $_GET['nama'];?>" method="POST">
	<fieldset>
		<legend>EDIT FORM NAMAI</LEgend>
			<table>
				
			<tr>
				<td> Nama </td> <td> : </td> <td><input type = "text" name="nama" size="10" value='<?php echo $d[0];?>'></td>
			</tr>
			
			<tr>
				<td> Kelas </td> <td> : </td> <td><input type = "text" name="kelas" size="10" value='<?php echo $d[1];?>'></td>
			</tr>
			
			<tr>
				<td> NBI </td> <td> : </td> <td><input type = "text" name="nbi" size="10" value='<?php echo $d[2];?>'></td>
			</tr>
			tr>
				<td> ALamat </td> <td> : </td> <td><input type = "text" name="alamat" size="10" value='<?php echo $d[2];?>'></td>
			</tr>
			
			
			<tr>
				<td> Umur </td> <td> : </td> <td><input type = "text" name="umur" size="10" value='<?php echo $d[4];?>'></td>
			</tr>
			
			<tr>
				<td>  </td> <td>  </td> <td><input type = "submit" name="Simpan" value="Ubah"></td>
											<td><input type = "Reset" name="Reset"></td>
			</tr>
		</fieldset>
</form>
