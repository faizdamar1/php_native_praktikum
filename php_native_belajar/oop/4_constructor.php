<?php 

class manusia{

	public $berat;
	public $suara;

	public function __construct($suara,$berat){
		echo $this->suara = $suara;
		echo "<br>";
		echo $this->berat = $berat;
		echo "<br>";
	}

	

}

$suaraP = 'ahah';
$beratP = 70;

$faiz = new manusia($suaraP,$beratP);
//$damar = new manusia('kikuk',80);



?>