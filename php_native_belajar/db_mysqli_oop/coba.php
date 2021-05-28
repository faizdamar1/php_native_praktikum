<?php 


$mysqli = new mysqli('localhost','root','','sekolah');

if($mysqli->connect_errno){
	echo "gagal";
}else{
	echo 'konek!';
}

$sql = "INSERT INTO murid (nama,email) VALUES ('toha','toha@Mmail.com')";
if($mysqli->query($sql)){
	echo 'sudah masuk';
}else{
	echo 'gagal masuk';
}

mysqli_close($mysqli);

?>