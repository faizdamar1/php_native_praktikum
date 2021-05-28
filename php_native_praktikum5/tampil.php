<html>
    <head>
        <title>Praktikum 5</title>
    </head>
    <body>
	<style>
		table {
			border-collapse : collapse;
		}
		
		table tr td {
			border : solid black ;
			
			
		}
	</style>
        <center>
		<h1>DATA MAHASISWA</h1>
		<table>
			<tr>
				<td>NBI</td>
				<td>NAMA</td>
				<td>JURUSAN</td>
				<td>JENIS KELAMIN</td>
				<td>EDIT</td>
				<td>HAPUS</td>
			</tr>
			<?php
				include 'koneksi.php';
				
				$query = 'select * from tb_mahasiswa';
				$row = $conn->prepare($query);
				$row->execute();
				while($data=$row->fetch()){
			?>		
				<tr>
					<td><?php echo $data['nbi']; ?></td>
					<td><?php echo $data['nama']; ?></td>
					<td><?php echo $data['jurusan']; ?></td>
					<td><?php echo $data['jeniskelamin']; ?></td>
					<td><a href="edit.php">EDIT</a></td>
					<td><a href="hapus.php">HAPUS</a></td>
				</tr>
			<?php		
				}
			?>	
		
		</table>
		<a href="index.php">Kembali kemenu utama</a>
		</center>
    </body>
</html>