<?php

	class komputer{

		public static $merk;

		public static function merk(){
			return "merk laptopnya : ".self::$merk;
		} 
	}
	
	komputer::$merk='acer';
	echo komputer::merk();
?>