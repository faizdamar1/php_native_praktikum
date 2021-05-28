<?php 
//require_once('1_mysqli_connect.php');

$connect = mysqli_connect("localhost","root","");
$set = mysqli_query($connect,"CREATE DATABASE belajar_koding");
if ($set) {
	echo "database created!";
}else{
	echo "failed to create database";
}

?>