<?php 
if (isset($_GET['eror'])) {
	$eror = $_GET['eror'];	
}else{
	$eror ="";
}

if($eror == 'nama_belum_diisi'){
	echo "<h1>isi nama dulu gan</h1>";
}elseif ($eror == 'email_belum_diisi') {
	echo "<h1>isi email dulu gan</h1>";
}elseif ($eror == 'password_belum_diisi') {
	echo "<h1>isi password dulu gan</h1>";
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Pengirman variable</title>
</head>
<body>

<form action="proses.php" method="GET">
	nama 	: <input type="text" name="nama"><br>
	email	: <input type="text" name="email"><br>
	pass 	: <input type="password" name="password"><br>
	<input type="submit" name="submit"><br>
</form>

</body>
</html>