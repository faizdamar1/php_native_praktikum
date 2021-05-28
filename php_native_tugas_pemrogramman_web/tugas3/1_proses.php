<?php 

	class hitung{

		public $jari;
		public $tinggi;
		public $luas;
		public $volume;

		public function lingkaran($jari){

			$this->jari = $jari;
			echo "jari-jarinya : ". $this->jari."<br>";
			
			$this->luas = 3.14 * ($this->jari * $this->jari);
			echo "Luasnya : ".$this->luas."<br>";

			return $this->luas;

		}

		public function tabung($jari,$tinggi){

			$this->jari   = $jari;
			$this->tinggi = $tinggi;

			echo "jari-jarinya : ". $this->jari."<br>";
			echo "Tingginya    : ". $this->tinggi."<br>";
			
			$this->volume = 3.14 * ($this->jari * $this->jari) * $this->tinggi;
			echo "Volumenya : ".$this->volume."<br>";

			return $this->volume;

		}

	}

	if(isset($_POST['llingkaran'])){
		$ling = new hitung;
		$ling->lingkaran($_POST['jari_jari']);
		?>
			<a href="index.php">HOME</a>
		<?php
	}else if(isset($_POST['vtabung'])){
		$tab = new hitung();
		$tab->tabung($_POST['jari_jari'],$_POST['tinggi']);
		?>
			<a href="index.php">HOME</a>
		<?php
	}

?>
