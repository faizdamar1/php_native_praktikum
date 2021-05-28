<?php 
	if (isset($_POST['upload'])) {
		//variable array global
		$name = $_FILES['gambarr']['name'];
		$size = $_FILES['gambarr']['size'];
		$loc  = $_FILES['gambarr']['tmp_name'];
		$ext  = $_FILES['gambarr']['type'];
		$alloc = "upload/";

		echo "file extention : $ext <br>";
		echo "file name : ".$name."<br>";
		echo "size file : ".$size."kb<br>";
		//echo "location : ".$loc."<br>";
		
		if($ext == 'image/png' || $ext == 'image/jpeg' || $ext == 'image/jpg'){
			
			
				move_uploaded_file($loc, $alloc);
				
				echo "file uploaded!";
			

		}else{
			echo "file not image";
		}
	}
	
?>

<form action="8_upload.php" method="post" enctype="multipart/form-data">
	<input type="file" name="gambarr">
	<input type="submit" name="upload" value="upload">
</form>