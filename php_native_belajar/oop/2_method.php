<?php

class manusia{

	public $berjalan = "prok-prok";
	public $suara    = "merdu";
	public $mata;

	public function berjalan(){
		echo "berjalannya ..".$this->berjalan;
	}

	public function suara(){
		return $this->suara;
	} 

	public function mata($mata){
		echo "warna matanya = ".$mata;
	}
}


$faiz = new manusia;
$faiz->berjalan();

echo "<br>faiz bersuara ..".$faiz->suara()."<br>";

$faiz->mata('biru muda');

?>