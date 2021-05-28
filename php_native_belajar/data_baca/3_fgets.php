<?php 
$file = "3_text.txt";

$handle=fopen("$file", "r");
while($fg = fgets($handle,100)){
	echo $fg."<br>";	
}
fclose($handle);
?>