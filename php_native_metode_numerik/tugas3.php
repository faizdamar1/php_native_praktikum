<?php 

if (isset($_POST['beda_depan'])) {
	?>
		<!DOCTYPE html>
		<html>
		<head>
			<title>
				Beda Depan
			</title>
		</head>
		<body>
		<form action="metode_numerik.php" method="POST">
			<table>
				<tr>
					<td>Xn</td>
					<td>:</td>
					<td><input type="text" name="xn"></td>
				</tr>
				<tr>
					<td>H</td>
					<td>:</td>
					<td><input type="text" name="h"></td>
				</tr>
				<tr>
					<td colspan="2"><input type="submit" name="hitung_beda_depan"></td>
				</tr>
			</table>
		</form>
		</body>
		</html>
<?php
}
if (isset($_POST['beda_belakang'])) {
	?>
		<!DOCTYPE html>
		<html>
		<head>
			<title>
				Beda Belakang
			</title>
		</head>
		<body>
		<form action="metode_numerik.php" method="POST">
			<table>
				<tr>
					<td>Xn</td>
					<td>:</td>
					<td><input type="text" name="xn"></td>
				</tr>
				<tr>
					<td>H</td>
					<td>:</td>
					<td><input type="text" name="h"></td>
				</tr>
				<tr>
					<td colspan="2"><input type="submit" name="hitung_beda_belakang"></td>
				</tr>
			</table>
		</form>
		</body>
		</html>
<?php
}
if (isset($_POST['titik_tengah'])) {
	?>
		<!DOCTYPE html>
		<html>
		<head>
			<title>
				Titik Tengah
			</title>
		</head>
		<body>
		<form action="metode_numerik.php" method="POST">
			<table>
				<tr>
					<td>Xn</td>
					<td>:</td>
					<td><input type="text" name="xn"></td>
				</tr>
				<tr>
					<td>H</td>
					<td>:</td>
					<td><input type="text" name="h"></td>
				</tr>
				<tr>
					<td colspan="2"><input type="submit" name="hitung_titik_tengah"></td>
				</tr>
			</table>
		</form>
		</body>
		</html>
<?php
}



 ?>