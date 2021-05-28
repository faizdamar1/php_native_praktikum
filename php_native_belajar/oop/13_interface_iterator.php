<?php 

class it{
	public function rewind(){
		var_dump(__method__);
	}
}

$itt = new it;
echo $itt->rewind();

?>