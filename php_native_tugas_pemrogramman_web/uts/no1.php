<?php 

$arrayName = array(rand(1,10),rand(1,10),rand(1,10),rand(1,10),rand(1,10),rand(1,10),rand(1,10),rand(1,10),rand(1,10),rand(1,10),rand(1,10));
echo "<h1>no1</br>";
for ($i=0; $i < 10 ; $i++) { 
	echo $arrayName[$i]." " ;
}

echo "<h1>no2</br>";
for ($i=0; $i < 10 ; $i++) {
	if($arrayName[$i] % 2 == 1){
		echo $arrayName[$i]." => ganjil";
		echo "<br>";

	} else{
		echo $arrayName[$i]." => genap";
		echo "<br>";
	}

}


?>