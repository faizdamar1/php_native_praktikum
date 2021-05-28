<?php 
	session_start();


	if(isset($_GET['submit'])){		
		$_SESSION["user_name"] = $_GET['nama'];
		header('location: 6_profile.php');
	}
	
?>