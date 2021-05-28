<?php 
	
	$file = fopen("1_text.txt", "w");

	if ($file) {
		fwrite($file, "\n fuaaak \n");
		fputs($file, "fuak");
		echo "file sudah ter edit";
	}else{
		echo "file gagal di buka";
	}
	fclose($file);
?>