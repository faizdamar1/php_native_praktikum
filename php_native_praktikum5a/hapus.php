<?php
include "koneksi.php";
	if(!isset($_POST['btn'])) {
		
		$nbia = $_GET['nbi'];
		$query = $conn->query("SELECT * FROM tb_mahasiswa WHERE nbi='$nbia' ");
		$row = $query->fetch(PDO::FETCH_ASSOC);
	}
	else {
		
		$nbis = $_POST['nbi'];
		
		$sql = "DELETE FROM tb_mahasiswa WHERE nbi = ?";
		$query = $conn->prepare($sql);
		$query->execute(array($nbis));
		
		?>
		<script>alert("Berhasil Menghapus Data"); document.location="index.php"</script>
		<?php
	}
	?>

SDcad	
<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>HAPUS DATA MAHASISWA</title>
	</head>
	<body>
		<div>
			<form action="<?php echo 'hapus.php' ?>" method="POST" accept-charset="utf-8">
				<label>Apakah Anda Yakin Ingin Menghapus ? <?php echo $row['nbi'] ?></label>
				<input type="hidden" name="nbi" value="<?php echo $row['nbi']?>">
				<input type="submit" name="btn" value="Hapus">
			</form>
		</div>
	</body>
</html>