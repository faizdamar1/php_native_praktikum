<?php 
	if(isset($_GET['submit'])){		
		setcookie("nama", "FAIZ",time()+100);
		echo "helooo".$_GET['nama'];
		}
	
?>

<form action="" method="GET">
	<input type="text" name="nama">
	<input type="password" name="password">
	<input type="submit" name="submit">
</form>