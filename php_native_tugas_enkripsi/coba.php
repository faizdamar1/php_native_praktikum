<?php

function enkrip($e) {
    $asli = array("a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z");
    $rep =   array("z","a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y");
    $chiper = str_replace($asli, $rep, $e);
    echo $chiper;
    }

function dekrip($d) {
    $rep =  array("a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y");
    $asli = array("a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z");
    $plain = str_replace($rep, $asli, $d);
    echo $plain;
    }
    
    $input=$_POST['pesan'];
    

if(isset($_POST['tombol']))
    $cek = $_POST['pilih'];
	{
    
		if($cek == "Enkripsi")
		{
			$input=$_POST['pesan'];
            $hasil = enkrip($input);
            //echo $hasil;   
        }
    
    
        if($cek == "Deskripsi")
		{	
			$input=$_POST['pesan'];
            $hasil = dekrip($input);
             //echo $hasil;
            
    }
}
?>
