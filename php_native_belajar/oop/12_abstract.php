<?php 

abstract class matematika{

	abstract function luas();
	abstract function keliling();
}

class rumus extends matematika{

	public $bangun;

	public function  __construct($bangunn){
		$this->bangun = $bangunn;
	}
	public function get_bangun(){
		return $this->bangun;
	}


	public function luas(){
		return 'ini luas';
	}

	public function keliling(){
		return 'ini keliling';
	}
}
	

$lingkaran = new rumus('lingkaran');	
echo $lingkaran->luas()." ".$lingkaran->get_bangun();

?>