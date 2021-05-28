<?php include "koneksi.php" ?>
<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Tugas Praktikum 5</title>
	</head>
	<body>
		<div>
			<h2 style='text-align:center'>DATA MAHASISWA</h2>
			<table cellpadding="10" border="1" align="center">
				<tr>
					<td>No</td>
					<td>NBI</td>
					<td>Nama</td>
					<td>Jurusan</td>
					<td>Jenis Kelamin</td>
					<td>Edit</td>
					<td>Hapus</td>
				</tr>
	<?php   
		$no=1;	
		$stmt = $conn->query("SELECT * FROM tb_mahasiswa");
	   
		while($row=$stmt->fetch(PDO::FETCH_ASSOC)) {
	?>
		<tr>
			<td><?php echo $no++; ?></td>
			<td><?php echo $row['nbi']; ?></td>
			<td><?php echo $row['nama']; ?></td>
			<td><?php echo $row['jurusan']; ?></td>
			<td><?php echo $row['jeniskelamin']; ?></td>
			<td><?php echo "<a href='edit.php?nbi=".$row['nbi']." '>EDIT</a>" ?></td>
			<td><?php echo "<a href='hapus.php?nbi=".$row['nbi']." '>HAPUS</a>" ?></td>
		</tr>
		<?php
			}
			?>
	</table>
	<p style="text-align:center;">
		<a href="tambah.php">FORM TAMBAH DATA MAHASISWA</a>
	</p>
	</div>		
	</body>
</html>