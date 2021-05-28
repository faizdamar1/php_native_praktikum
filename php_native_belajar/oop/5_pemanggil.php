<?php 

require_once('5_inheritance.php');
require_once('5_anak.php');

//===================================================
$toha = new bapak;
$toha->set_hobi('TENIS');
$toha->set_sifat('SABAR');

echo "hobi bapak Toha = ".$toha->get_hobi()."<br>";
echo "sifat bapak Toha =".$toha->get_sifat()."<br>";
//===================================================
$anaktoha = new anak;
echo "anak toha memiliki sifat ".$anaktoha->get_sifat();

?>