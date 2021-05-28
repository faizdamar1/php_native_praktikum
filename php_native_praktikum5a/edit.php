<?php
	include "koneksi.php";
	if(!isset($_GET['btn'])) {
		$nbi = $_GET ['nbi'];
		$query = $conn->query("SELECT * FROM tb_mahasiswa WHERE nbi='$nbi' ");
		$row = $query->fetch(PDO::FETCH_ASSOC);
	}
	else {
		include "koneksi.php";
		$nbi 	= $_GET['nbi'];
		$nama	= $_GET['nama'];
		$jurusan= $_GET['jurusan'];
		$jeniskelamin		= $_GET['jeniskelamin'];
		$editQuery = $conn->prepare("UPDATE tb_mahasiswa SET nama=?,jurusan=?,jeniskelamin=? WHERE nbi=?");
		
		$editQuery->execute(array($nama,$jurusan,$jeniskelamin,$nbi));
		if($editQuery->rowCount() > 0) {
			echo "Sukses";
		}
		?> <script>alert("Anda Berhasil Mengubah Data"); document.location="index.php"</script>
		<?php
	}
	?>
<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>EDIT DATA MAHASISWA</title>
	</head>
	<body>
		<div>
			<h2 style='text-align:center'>FORM EDIT MAHASISWA</h2>
			<form action="edit.php" method="GET" accept-charset="utf-8">
				<fieldset>
					<table align="center">
					<tr>
						<td>NBI</td>
						<td>:</td>
						<td><input type="text" name="nbi" value="<?php echo $row['nbi']?>" disabled></td>
					</tr>
					<tr>
						<td>Nama</td>
						<td>:</td>
						<td><input type="text" name="nama" value="<?php echo $row['nama']?>" ></td>
					</tr>
					<tr>
						<td>Jurusan</td>
						<td>:</td>
						<td><select name="jurusan">
							<option value="Teknik Industri"
								<?php if($row['jurusan']=='Teknik Industri') {
											echo "selected";
										} ;?>>Teknik Industri</option>
							<option value="Teknik Informatika"
								<?php if($row['jurusan']=='Teknik Informatika') {
											echo "selected";
										} ;?>>Teknik Informatika</option>
							<option value="Teknik Mesin"
								<?php if($row['jurusan']=='Teknik Mesin') {
											echo "selected";
										} ;?>>Teknik Mesin</option>
							<option value="Teknik Elektro"
								<?php if($row['jurusan']=='Teknik Elektro') {
											echo "selected";
										} ;?>>Teknik Elektro</option>
							</select></td>
					</tr>
					<tr>
						<td>Jenis Kelamin</td>
						<td>:</td>
						<td><input type="radio" name="jeniskelamin" value="Laki-laki"
								<?php if($row['jeniskelamin']=="Laki-laki") {
											echo "checked";
										} ?> /> Laki-laki
							<input type="radio" name="jeniskelamin" value="Perempuan"
								<?php if($row['jeniskelamin']=="Perempuan") {
											echo "checked";
										} ?> />Perempuan
						</td>
					</tr>
					<tr>
						<input type="hidden" name="nbi" value="<?php echo $row['nbi']?>">
						<td><input type="submit" name="btn" value="Simpan"></td>
						<td></td>
						<td><input type="reset" name="" value="Reset"></td>
					</tr>
				</fieldset>
			</form>
		</div>
	</body>
</html>