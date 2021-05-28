<?php
	include "koneksi.php";
	if(isset($_POST['btn'])) {
		$nbi 	= $_POST['nbi'];
		$nama	= $_POST['nama'];
		$jurusan= $_POST['jurusan'];
		$jeniskelamin = $_POST['jeniskelamin'];
		
		$query = $conn->prepare("INSERT INTO tb_mahasiswa(nbi,nama,jurusan,jeniskelamin) VALUES (?,?,?,?)");
		$query->bindParam(1,$nbi);
		$query->bindParam(2,$nama);
		$query->bindParam(3,$jurusan);
		$query->bindParam(4,$jeniskelamin);
		$query->execute();
		if($query->rowCount() > 0) {
			echo "Sukses";
		}
	?> 	<script>alert("Anda Berhasil Menambah Data");
		document.location="index.php"</script>
	<?php
		}
	?>
<!doctype html>
<html>
	<head>
		<title>TAMBAH DATA</title>
	</head>
	<body>
			<div>
			<h2 style='text-align:center'>FORM TAMBAH DATA MAHASISWA</h2>
			<form action="tambah.php" method="post" accept-charset="utf-8">
				<fieldset>
					<table align="center">
					<tr>
						<td>NBI</td>
						<td>:</td>
						<td><input type="text" name="nbi" value="" placeholder="Masukkan NBI"></td>
					</tr>
					<tr>
						<td>Nama</td>
						<td>:</td>
						<td><input type="text" name="nama" value="" placeholder="Masukkan Nama"></td>
					</tr>
					<tr>
						<td>Jurusan</td>
						<td>:</td>
						<td><select name="jurusan">
							<option value="Teknik Industri">Teknik Industri</option>
							<option value="Teknik Informatika">Teknik Informatika</option>
							<option value="Teknik Mesin">Teknik Mesin</option>
							<option value="Teknik Elektro">Teknik Elektro</option>
							</select></td>
					</tr>
					<tr>
						<td>Jenis Kelamin</td>
						<td>:</td>
						<td><input type="radio" name="jeniskelamin" value="Laki-laki" placeholder="">Laki-laki
							<input type="radio" name="jeniskelamin" value="Perempuan" placeholder="">Perempuan
						</td>
					</tr>
					<tr>
						<td><input type="submit" name="btn" value="Simpan"></td>
						<td></td>
						<td><input type="reset" name="" value="Reset"></td>
					</tr>
					</table>
				</fieldset>
			</form>
		</div>
	</body>
</html>