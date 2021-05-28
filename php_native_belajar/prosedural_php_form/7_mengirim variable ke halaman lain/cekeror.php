<?php 
if (isset($_POST['eror'])) {
	$eror = $_POST['eror'];	
}

if($eror == 'nama_belum_diisi'){
	echo "<h1>isi nama dulu gan</h1>";
}elseif ($eror == 'email_belum_diisi') {
	echo "<h1>isi email dulu gan</h1>";
}elseif ($eror == 'password_belum_diisi') {
	echo "<h1>isi password dulu gan</h1>";
}
?>

<a href="index.php">MENU</a>