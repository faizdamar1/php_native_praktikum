<?php 
include '1_mysqli_connect.php';
$link;


//$link  = mysqli_connect("localhost","root","","db_mysqli");
$query = mysqli_query($link,"SELECT * FROM murid");
$count = mysqli_num_rows($query);

if($count > 0){
	while($data = mysqli_fetch_assoc($query)){
		echo "nama  = ".$data['nama']."<br>";
		echo "email = ".$data['email']."<br>";
	}
}

mysqli_close($link);
?>