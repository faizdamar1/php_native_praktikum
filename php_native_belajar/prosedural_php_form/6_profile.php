<?php 
	session_start();
	
	if(isset($_SESSION['user_name'])){
		echo $_SESSION['user_name']." sudah berhasil";	
	}else{
		echo "login dulu gan";
	}
	

?>

<a href="logout.php">logout</a>