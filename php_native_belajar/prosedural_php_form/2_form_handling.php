<!DOCTYPE html>
<html>
<head>
	<title>Form Handling</title>
</head>
<body>
<form action="2_get.php" method="get">
	<table>
		<tr>
			<td>name</td>
			<td>:</td>
			<td><input type="text" name="name"></td>
		</tr>

		<tr>
			<td>email</td>
			<td>:</td>
			<td><input type="text" name="email"></td>
		</tr>
		<tr>
			<td colspan="2"><input type="submit" name="submit" value="send"></td>
			<td><input type="reset" name="reset" value="reset"></td>
		</tr>
	</table>
</form>
</body>
</html>