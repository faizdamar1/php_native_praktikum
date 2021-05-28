<?php 

$namedir = "whatever";

$isset = mkdir($namedir);

if($isset){
	echo "dir cretaed with name $namedir";
}else{
	echo "failed to create dir";
}
?>