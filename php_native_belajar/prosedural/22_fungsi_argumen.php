<?php 

function pangkat($nilai , $pangkat){

	if(is_numeric($nilai) and is_int($pangkat))
	{
		$hasil = 1;
		for ($i=1; $i<=$pangkat  ; $i++)
		{ 
			$hasil = $hasil * $nilai;		
		}
		return $hasil;
	}else{
		return "tipe data argumen harus berupa angka";
	}
}

echo pangkat(5,2)."<br>";
echo pangkat(10.5,2.2)."<br>";


?>