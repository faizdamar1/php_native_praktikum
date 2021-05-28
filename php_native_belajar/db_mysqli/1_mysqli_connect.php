<?php 

$host = "localhost";
$user = "root";
$pass = "";
$db   = "db_mysqli";

$link = mysqli_connect($host,$user,$pass,$db);

if($link){
	//die("connected!");
}else{
	die("not connected". mysqli_connect_error());
}

//mysqli_close($link );

?>