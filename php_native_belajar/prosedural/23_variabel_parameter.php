<?php 
	
	function penambahan(){

		$jumlah_data = func_num_args();
		$nilai = 0;
		for ($i=0; $i < $jumlah_data ; $i++)
		{ 
			$nilai = $nilai + func_get_arg($i);
		}
		return $nilai;
	}

	echo "penjumlahan dari 3,4,5 adalah = ".penambahan(3,4,5)."<br>";

	echo "penjumlahan dari 3,4,5,6,7,8 adalah = ".penambahan(3,4,5,6,7,8)."<br>";

?>