<?php 
	
	$file = "6_file.txt";
	$filenew = "6_fileCopy.txt";
	$fileRename = "6_fileRename.txt";

	$isset = copy($file, $filenew);
	if ($isset) {
		echo "file tercopy, dari $file menjadi $filenew <br>";
	}else{
		echo "failed to copy <br>";
	}
?>