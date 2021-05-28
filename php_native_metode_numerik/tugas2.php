<?php 

if(isset($_POST['regula_falsi'])){
	?>
		<!DOCTYPE html>
		<html>
		<head>
			<title>
				Regula Falsi
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
					<td colspan="2"><input type="submit" name="hitung_regula_falasi"></td>
				</tr>
			</table>

		</form>
		</body>
		</html>
<?php
//--------------------------------------------------
}else if(isset($_POST['regula_falsi_modifikasi'])){
	?>
	<!DOCTYPE html>
		<html>
		<head>
			<title>
				Regula Falsi Modifikasi
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
					<td colspan="2"><input type="submit" name="hitung_regula_falasi_modifikasi"></td>
				</tr>
			</table>

		</form>
		</body>
		</html>
<?php
//--------------------------------
}else if(isset($_POST['secant'])){
	?>
		<!DOCTYPE html>
		<html>
		<head>
			<title>
				Secant
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
					<td>H</td>
					<td>:</td>
					<td><input type="text" name="h"></td>
				</tr>
				<tr>
					<td>MARGIN ERROR</td>
					<td>:</td>
					<td><input type="text" name="batas_error"></td>
				</tr>
				<tr>
					<td colspan="2"><input type="submit" name="hitung_secant"></td>
				</tr>
			</table>

		</form>
		</body>
		</html>
	<?php
}else if(isset($_POST['newton'])){
	?>
		<!DOCTYPE html>
		<html>
		<head>
			<title>
				Newton
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
					<td>MARGIN ERROR</td>
					<td>:</td>
					<td><input type="text" name="batas_error"></td>
				</tr>
				<tr>
					<td colspan="2"><input type="submit" name="hitung_newton"></td>
				</tr>
			</table>

		</form>
		</body>
		</html>
	<?php
}
 ?>