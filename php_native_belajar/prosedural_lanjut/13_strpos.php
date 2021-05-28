<?php 

	$str = "everybody gets high sometimes, you know.";

	$position = strpos($str, "gets");
		echo "string 'gets' = $position <br>";
		echo var_dump($position)."<br>";
		var_dump($position);
		echo "<br>";
		
	$position_new = strpos($str,"love");
	if($position_new){
		echo "text can be found";
	}else{
		echo "text can't be found";
	}

?>