<?php 

if (isset($_GET['nama']) AND isset($_GET['email']) AND isset($_GET['password'])) {
	$nama  = strip_tags($_POST['nama']);
	$email = strip_tags($_POST['email']);
	$pass  = md5(strip_tags($_POST['password']));
	
	if(empty($nama)){
		header("location:index.php?eror=nama_belum_diisi");
	}elseif (empty($email)) {
		header("location:index.php?eror=email_belum_diisi");
	}elseif (empty($pass)) {
		header("location:index.php?eror=password_belum_diisi");
	}else{
		echo "nama  : ".$nama."<br>";
		echo "email : ".$email."<br>";
		echo "pass  : ".$pass."<br>";
	}
	
}else{
	echo "daftar dulu gan";
	?>
	<a href="index.php">MENU</a>
<?php
}
?>
 