<?php 

require_once '6_overriding.php';

class hewan extends robot{
	public function get_suara(){
		return 'suaranya..'.$this->suara;
	}
}

?>