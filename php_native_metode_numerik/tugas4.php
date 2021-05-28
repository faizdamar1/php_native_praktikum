<?php 

if (isset($_POST['persegi_panjang'])) {
	?>
		<!DOCTYPE html>
		<html>
		<head>
			<title>
				Aturan Persegi Panjang
			</title>
		</head>
		<body>
		<form action="metode_numerik.php" method="POST">
			<table>
				<tr>
					<td>A</td>
					<td>:</td>
					<td><input type="text" name="batas_a"></td>
				</tr>
				<tr>
					<td>B</td>
					<td>:</td>
					<td><input type="text" name="batas_b"></td>
				</tr>
				<tr>
					<td>H</td>
					<td>:</td>
					<td><input type="text" name="h"></td>
				</tr>
				<tr>
					<td colspan="2"><input type="submit" name="hitung_persegi_panjang"></td>
				</tr>
			</table>
		</form>
		</body>
		</html>
	<?php
}
if (isset($_POST['aturan_titik_tengah'])) {
	?>
		<!DOCTYPE html>
		<html>
		<head>
			<title>
				Aturan Titik Tengah
			</title>
		</head>
		<body>
		<form action="metode_numerik.php" method="POST">
			<table>
				<tr>
					<td>A</td>
					<td>:</td>
					<td><input type="text" name="batas_a"></td>
				</tr>
				<tr>
					<td>B</td>
					<td>:</td>
					<td><input type="text" name="batas_b"></td>
				</tr>
				<tr>
					<td>H</td>
					<td>:</td>
					<td><input type="text" name="h"></td>
				</tr>
				<tr>
					<td colspan="2"><input type="submit" name="hitung_aturan_titik_tengah"></td>
				</tr>
			</table>
		</form>
		</body>
		</html>
	<?php
}
if (isset($_POST['aturan_trapesoeda'])) {
	?>
		<!DOCTYPE html>
		<html>
		<head>
			<title>
				Aturan Trapesoeda
			</title>
		</head>
		<body>
		<form action="metode_numerik.php" method="POST">
			<table>
				<tr>
					<td>A</td>
					<td>:</td>
					<td><input type="text" name="batas_a"></td>
				</tr>
				<tr>
					<td>B</td>
					<td>:</td>
					<td><input type="text" name="batas_b"></td>
				</tr>
				<tr>
					<td>H</td>
					<td>:</td>
					<td><input type="text" name="h"></td>
				</tr>
				<tr>
					<td colspan="2"><input type="submit" name="hitung_trapesoeda"></td>
				</tr>
			</table>
		</form>
		</body>
		</html>
	<?php
}
if (isset($_POST['simpson'])) {
	?>
		<!DOCTYPE html>
		<html>
		<head>
			<title>
				Aturan Simpson
			</title>
		</head>
		<body>
		<form action="metode_numerik.php" method="POST">
			<table>
				<tr>
					<td>A</td>
					<td>:</td>
					<td><input type="text" name="batas_a"></td>
				</tr>
				<tr>
					<td>B</td>
					<td>:</td>
					<td><input type="text" name="batas_b"></td>
				</tr>
				<tr>
					<td>H</td>
					<td>:</td>
					<td><input type="text" name="h"></td>
				</tr>
				<tr>
					<td colspan="2"><input type="submit" name="hitung_simpson"></td>
				</tr>
			</table>
		</form>
		</body>
		</html>
	<?php
}
if (isset($_POST['simpson_sepertiga'])) {
	?>
		<!DOCTYPE html>
		<html>
		<head>
			<title>
				Aturan Simpson 1/3
			</title>
		</head>
		<body>
		<form action="metode_numerik.php" method="POST">
			<table>
				<tr>
					<td>A</td>
					<td>:</td>
					<td><input type="text" name="batas_a"></td>
				</tr>
				<tr>
					<td>B</td>
					<td>:</td>
					<td><input type="text" name="batas_b"></td>
				</tr>
				<tr>
					<td>H</td>
					<td>:</td>
					<td><input type="text" name="h"></td>
				</tr>
				<tr>
					<td colspan="2"><input type="submit" name="hitung_simpson_sepertiga"></td>
				</tr>
			</table>
		</form>
		</body>
		</html>
	<?php
}
if (isset($_POST['simpson_tiga_per_delapan'])) {
	?>
		<!DOCTYPE html>
		<html>
		<head>
			<title>
				Aturan Simpson 3/8
			</title>
		</head>
		<body>
		<form action="metode_numerik.php" method="POST">
			<table>
				<tr>
					<td>A</td>
					<td>:</td>
					<td><input type="text" name="batas_a"></td>
				</tr>
				<tr>
					<td>B</td>
					<td>:</td>
					<td><input type="text" name="batas_b"></td>
				</tr>
				<tr>
					<td>H</td>
					<td>:</td>
					<td><input type="text" name="h"></td>
				</tr>
				<tr>
					<td colspan="2"><input type="submit" name="hitung_simpson_tiga_perdelapan"></td>
				</tr>
			</table>
		</form>
		</body>
		</html>
	<?php
}

 ?>