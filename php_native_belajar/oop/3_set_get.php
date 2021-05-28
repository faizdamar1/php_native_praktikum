<?php 

class manusia{

	public $suara;
	public $warna;
	public $tinggi;
//==============================================
	public function set_suara($suara){
		$this->suara = $suaraP;
	}
	public function get_suara(){
		return $this->suara;
	}

}

$faiz = new manusia;

$faiz->set_suara('merdu');
echo "suaranya faiz ..".$faiz->get_suara();
echo "<br>";

$faiz->set_warna('coklat ke emas-emasan');
echo "warna kulit faiz ..".$faiz->get_warna();
echo "<br>";

$faiz->set_tinggi(185);
echo "tinggi faiz ..".$faiz->get_tinggi()." cm";
?>