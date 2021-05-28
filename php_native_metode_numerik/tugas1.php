<?php 

if (isset($_POST['biseksi'])) {
	?>
		<!DOCTYPE html>
		<html>
		<head>
			<title>
				BIseksi
			</title>
		</head>
		<body>
		<form action="metode_numerik.php" method="POST">
			<table>
				<tr>
					<td>BATAS A</td>
					<td>:</td>
					<td><input type="text" name="batas_a"></td>
				</tr>
				<tr>
					<td>BATAS B</td>
					<td>:</td>
					<td><input type="text" name="batas_b"></td>
				</tr>
				<tr>
					<td>MARGIN ERROR</td>
					<td>:</td>
					<td><input type="text" name="batas_error"></td>
				</tr>
				<tr>
					<td colspan="2"><input type="submit" name="hitung_biseksi"></td>
				</tr>
			</table>

		</form>
		</body>
		</html>
	<?php
}

?>
