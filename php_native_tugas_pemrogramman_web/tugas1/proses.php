<?php

	if (isset($_POST['send'])) {

		$nama 	  = trim($_POST['nama']);
		$password = $_POST['pass'];

			?>
			<center>
			<h2>ANDA TELAH LOGIN, <?php echo ucwords($nama);?></h2>
			<table>
				<tr>
					<td>Tanggal</td>
					<td>:</td>
					<td><?php echo date("d F Y"); ?></td>
				</tr>
				<tr>
					<td>UserName</td>
					<td>:</td>
					<td><?php echo $nama ?></td>
				</tr>
				<tr>
					<td>Password</td>
					<td>:</td>
					<td><?php echo $password ?></td>
				</tr>
				<hr>
			</table>
			<hr>
			<a href="index.php"><br>Logout</a>
			</center>
			
			<?php
	}else{
	?>
			<a href="index.php">login dulu gan</a>		
	<?php
	}
	
?>
