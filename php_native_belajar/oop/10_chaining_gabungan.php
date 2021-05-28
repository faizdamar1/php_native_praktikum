<?php 

class komputer{

public $merk;
public $harga;

	public function set_merk($merk){
		$this->merk = $merk;
		return $this;
	}
	public function get_merk(){
		return "Merknya ".$this->merk;
	}
	public function set_harga($harga){
		$this->harga = $harga;
	}
	public function get_harga(){
		return " dan harganya ".$this->harga;
	}
}

$newkomp = new komputer;
$newkomp->set_merk("Acer")->set_harga(550000);

echo $newkomp->get_merk().$newkomp->get_harga();

?>