<?php 
	if(isset($_GET['submit'])){
		echo $_GET['nama'];	
	}
	
?>
<form action="4_isset.php" method="GET">
	<input type="text" name="nama">
	<input type="password" name="password">
	<input type="submit" name="submit">
</form>