<?php 

class bapak{

	public $hobibapak;
	public $sifat;

	public function set_hobi($hobi){
		$this->hobibapak = $hobi;
	}
	public function get_hobi(){
		return $this->hobibapak;
	}

	public function set_sifat($sifat){
		$this->sifat = $sifat;
	}
	public function get_sifat(){
		return $this->sifat;
	}

	public function bapakk(){
		echo "ini dari bapak";
	}
}


class anak extends bapak{
	
	public $hobianak;

	public function set_hobianak($hobianak){
		$this->hobianak = $hobianak;
	}
	public function get_hobianak(){
		return $this->hobianak;
	}
}


$bapak = new bapak;
$bapak->set_hobi('tenis');
$bapak->set_sifat('sabar');
$anak = new anak;
$anak->bapakk();


?>