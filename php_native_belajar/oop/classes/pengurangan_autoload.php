<?php 

class pengurangan_autoload{

	public $c;
	public $d;

	public function __construct($c,$d){
		$this->c = $c;
		$this->d = $d;
	}

	public function ngurang(){
		return $this->c - $this->d;
	}

}

?>