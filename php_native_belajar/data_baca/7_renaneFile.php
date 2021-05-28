<?php 

$file = "6_fileCopy.txt";
$fileRen = "7_renameFile.txt";

$isset = rename($file, $fileRen);

if ($isset) {
	echo "congratulation ! $file berganti menjadi $fileRen <br>";
}else{
	echo "failed to rename $file";
}

?>