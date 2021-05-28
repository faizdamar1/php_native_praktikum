<?php 

//htmlentities berfungsi untuk mencegah hacker menginjecksi dengan html injection

$kata = "aku suka makan <b>soto</b> dan <u>bakso</u>";
echo "kata sebelum di beri fungsi htmlentities = ".$kata."<br>";
echo "kata sesudah di masukan di htmlentities = ".htmlentities($kata)


?>