<?php 

class php{
	public function phpx(){
		echo 'from php';
	}
}

class css{
	public function cssx(){
		echo 'from css';
	}
}

class framework extends php {

	public $fromphp;
	public $fromcss;

	public function __construct(php $value,css $value2){

		echo "this sintax from framework class <br>";
		$this->fromphp = $value;
		$this->fromcss = $value2;
		$this->fromphp->phpx();
		echo "<br>";
		$this->fromcss->cssx();
	}

}
$php = new php;$css = new css;
new framework($php,$css);

?>