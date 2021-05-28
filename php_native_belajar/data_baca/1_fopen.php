<?php 

$file = fopen("1_text.txt", "r");

if($file){
	echo "file terbuka";
}else{
	echo "file tidak terbuka";
}

?>