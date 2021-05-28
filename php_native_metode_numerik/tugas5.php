<?php 

if (isset($_POST['integral_ganda'])) {
	?>

		<!DOCTYPE html>
		<html>
		<head>
			<title>
				Aturan Integral ganda
			</title>
		</head>
		<body>
		<form action="metode_numerik.php" method="POST">
			<table>
				<tr>
					<td>x(a)</td>
					<td>:</td>
					<td><input type="text" name="a"></td>
				</tr>
				<tr>
					<td>x(b)</td>
					<td>:</td>
					<td><input type="text" name="b"></td>
				</tr>
				<tr>
					<td>y(a)</td>
					<td>:</td>
					<td><input type="text" name="c"></td>
				</tr>
				<tr>
					<td>y(b)</td>
					<td>:</td>
					<td><input type="text" name="d"></td>
				</tr>
				<tr>
					<td>H(x)</td>
					<td>:</td>
					<td><input type="text" name="hx"></td>
				</tr>
				<tr>
					<td>H(y)</td>
					<td>:</td>
					<td><input type="text" name="hy"></td>
				</tr>
				<tr>
					<td colspan="2"><input type="submit" name="hitung_integral_ganda"></td>
				</tr>
			</table>
		</form>
		</body>
		</html>

	<?php
}
if (isset($_POST['gauss'])) {

		?>

		<!DOCTYPE html>
		<html>
		<head>
			<title>
				Aturan Integral ganda
			</title>
		</head>
		<body>
		<form  method="POST">
			<table>
				<tr>
					<td>Ordo Matrik</td>
					<td>:</td>
					<td><input type="text" name="a"></td>
				</tr>
				<tr>
					<td colspan="2"><input type="submit" name="ordo"></td>
				</tr>
			</table>
		</form>
		</body>
		</html>

	<?php
}
?>

<form action="metode_numerik.php" method="POST">
<?php 
if ($_POST['ordo']) {
	$n = $_POST['a'];
			?>
			<table>
			<tr>
				<td>Matrik A</td>
			</tr>
			<?php
	for($i = 0; $i<$n; $i++)
	{
		for($j = 0; $j<$n; $j++)
		{
			?>			
			<tr>
				<td><input type="text" name="b" placeholder="<?php echo $i+1; echo ","; echo $j+1;?>" size="3" name="<?php $i;$j;?>"></td>
			</tr>	
			<?php
		}
	}
		?>
		</table>
		<table>
		<tr>
			<td>Matrik B</td>
		</tr>
		<?php
	for($i = 0; $i<$n; $i++)
	{
		?>
		<tr>
			<td><input type="text" name="$i" placeholder="<?php echo $i+1;?>" size="3"></td>
		</tr>	
		<?php
	}
	?>
		<tr>
			<td><input type="submit" name="hitung_gauss" value="Hitung"></td>
		</tr>
	</table>
	<?php
}
?>
</form>
