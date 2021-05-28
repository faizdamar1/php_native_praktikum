<?php 

class penjumlahan_autoload{

	public $a;
	public $b;

	public function __construct($a,$b){
		$this->a = $a;
		$this->b = $b;
	}

	public function jumlah(){
		return $this->a + $this->b;
	}

}

?>