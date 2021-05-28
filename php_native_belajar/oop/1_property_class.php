<?php 

class manusia{

	public $makan    = "pecel";
	public $berjalan = "prok-prok";
	public $berat	 = 30;

}

class hewan{

	public $makan    = "daging";
	public $berjalan = "prok";
	public $berat	 = 10;

}

$faiz = new manusia;
$inihewan = new hewan;

echo "sukanya makan = ".$faiz->makan."<br>";
echo "berjalanya = ".$faiz->berjalan."<br>";
echo "dengan berat = ".$faiz->berat."<br>";

echo "hewanya makan ".$inihewan->makan;

?>