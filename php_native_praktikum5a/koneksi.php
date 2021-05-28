<?php
$host="localhost";
$user="root";
$pass="";
$db="praktikum5";

try {
	$conn=new PDO("mysql:dbname=$db;host=$host",$user,$pass);
	$conn->setAttribute(PDO::CASE_LOWER,PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
	echo "Koneksi Gagal";
}