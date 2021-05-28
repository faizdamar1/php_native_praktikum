<?php 

	$number = 12428284.33987239;
	echo "sebelum di beri fungsi number_format() = Rp. $number <br>";
	

	$number_new = number_format($number,2,",",".");
	echo "sesudah di beri fungsi number_format() = Rp. ".$number_new;

?>