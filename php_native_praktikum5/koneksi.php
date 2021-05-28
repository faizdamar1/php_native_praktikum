<?php
	try{
		$conn = new PDO('mysql:host=localhost;dbname=praktikum5',"root","");
		
	}catch(PDOException $e){
		echo "database tidak tersambung".$e->getMessage();
	}
?>