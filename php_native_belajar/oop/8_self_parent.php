<?php 

class komputer{

	public $merk;

	public function set_merk($merk){
		$this->merk = $merk;
	}
	public function get_merk(){
		return "Dijalankan dengan class komputer ".$this->merk;
	}
}

class laptop extends komputer{

	public function get_merk(){
		return "Di jalankan dengan class laptop ".$this->merk;
	}
	public function self(){
		return self::get_merk();
	}
	public function parent(){
		return parent::get_merk();
	}
}

$laptopbaru = new laptop;
$laptopbaru->set_merk("ACER");

echo "ini yang di jalankan dengan self : ".$laptopbaru->self();
echo "<hr><br>";
echo "ini di jalankan dengan parent : ".$laptopbaru->parent();
?>