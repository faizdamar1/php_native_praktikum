<?php 
require_once('1_mysqli_connect.php');
$link;

echo "<h2>Menggunakan LIMIT<br></h2>";
$query = mysqli_query($link,"SELECT * FROM murid LIMIT 2");
$count = mysqli_num_rows($query);
if ($count > 0) {
	while ($data = mysqli_fetch_assoc($query)) {
		echo $data['nama']."<br>";
	}
}

echo "<h2>Ini yang ORDER BY id DESC</h2><br>";
$query2 = mysqli_query($link,"SELECT * FROM murid ORDER BY id DESC");
$count2 = mysqli_num_rows($query2);
if ($count2 > 0) {
	while ($data2 = mysqli_fetch_assoc($query2)) {
		echo $data2['nama']."<br>";
	}
}


echo "<h2>Ini yang WHERE</h2><br>";
$query3 = mysqli_query($link,"SELECT * FROM murid WHERE email='faiz@gmail.com'");
$count3 = mysqli_num_rows($query3);
if ($count3 > 0) {
	while ($data3 = mysqli_fetch_assoc($query3)) {
		echo $data3['nama']."  ".$data3['email']."<br>";
	}
}
?>
