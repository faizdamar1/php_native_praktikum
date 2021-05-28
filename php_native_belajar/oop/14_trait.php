<?php 

trait hallo{
	public function sayhallo(){
		return 'hallooo ';
	}
}

trait name{
	public function sayname(){
		return 'faiz';
	}
}

trait halloname{
	use hallo, name; 
}

class sayhalloname{
	use halloname;
}

$say = new sayhalloname();

echo $say->sayhallo()." ".$say->sayname();


?>