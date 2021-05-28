<?php 

class mobil{

	public $harga1;
	protected $harga2;
	private $harga3;

	public function set_harga1($harga1){
		$this->harga1 = $harga1;
	}
	public function get_harga1(){
		return $this->harga1;
	}

	public function set_harga2($harga2){
		$this->harga2 = $harga2;
	}
	public function get_harga2(){
		return $this->harga2;
	}

	public function set_harga3($harga3){
		$this->harga3 = $harga3;
	}
	public function get_harga3(){
		return $this->harga3;
	}
		
}


$mobil1 = new mobil;
$mobil1->set_harga1(10000000);
echo "Ini HARGA 1 public ".$mobil1->harga1;
echo "<br>";

$mobil2 = new mobil;
$mobil2->set_harga2(50000000);
echo "Ini HARGA 2 protected ";
echo $mobil2->get_harga2()."<br>";

$mobil3 = new mobil;
$mobil3->set_harga3(650000);
echo "Ini HARGA 3 private ";
echo $mobil3->get_harga3();

?>