<?php 
require_once('1_mysqli_connect.php');

$nama  = "uzumaki";
$email = "uzumaki@gmail.com";
$pass  = "555";
$query = "INSERT INTO murid (nama,email,password) 
							 VALUES ('hihi','ciu@gmail.com','haha');";

$query .= "INSERT INTO murid (nama,email,password) 
							 VALUES ('kwkw','kwkw@gmail.com','wkkwkw')";

if (mysqli_multi_query($link,$query)) {
	echo "berhasil";
}else{
	echo "gagal";
}

?>