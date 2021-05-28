<?php 

class connection{

	public $host;
	public $user;
	public $pass;
	public $db;
	public $mysqli;
	public $tutup;

	public function __construct($host,$user,$pass,$db){

		$this->host = $host;
		$this->user = $user;
		$this->pass = $pass;
		$this->db   = $db;
	}


	public function connect(){

		$this->mysqli = new mysqli($this->host,$this->user,$this->pass,$this->db);
		if($this->mysqli->connect_errno){
			echo "fail";
		}else{
			echo "connected!";
		}
		

	}

	public function close(){

		$this->tutup = mysqli_close($this->mysqli);
		if($this->tutup){
			echo "closed";
		}else{
			echo "opened";
		}
	}

}

// $connection = new connection('localhost','root','','sekolah');
?>