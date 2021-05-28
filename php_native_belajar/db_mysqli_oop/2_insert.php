<?php 
 	
 include '1_koneksi.php';
class insert extends connection{

	public $nama;
	public $email;

	public function set_value($nama,$email){

		$this->nama  = $nama;
		$this->email = $email;

	}
	public function get_value_nama(){
		return $this->nama;
	}
	public function get_value_email(){
		return $this->email;
	}


	public function insertion(){

		$this->mysqli->query("INSERT INTO murid(nama,email) VALUES ('aaa', 'eemaaill')");

		if( $this->mysqli->query("INSERT INTO murid(nama,email) VALUES ('$this->nama', '$this->email')") ){
			echo "inserted!";
		}else{
			echo "failed to insert!";
		}
		//echo "TEST"; echo $this->nama;

	}

}

$connection = new connection('localhost','root','','sekolah');
$insertion = new insert('localhost','root','','sekolah');
$insertion->set_value('faizZZZ','faiz@mail');
$insertion->connect();
$insertion->insertion('localhost','root','','sekolah');
$insertion->close();
?>