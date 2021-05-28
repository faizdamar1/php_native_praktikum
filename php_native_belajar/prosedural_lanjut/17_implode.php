<?php 

$str_array = ["one" , "two" , "three"];

echo "this is array = ";
var_dump($str_array);
echo "<br>";
$str_string = implode(" ", $str_array);
echo "this is string = $str_string <br>";
var_dump($str_string);


?>