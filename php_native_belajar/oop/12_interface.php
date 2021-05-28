<?php 

	interface konsep_mouse{
		public function klikkanan();
		public function klikiri();
		public function scroll();
	}


	interface mouse_gaming extends konsep_mouse{
		public function bisa_nyala();
	}

	class mouse implements mouse_gaming{
		public function klikkanan(){
			return 'ini klik kanan';
		}

		public function klikiri(){
			return 'ini klik kiri';
		}

		public function scroll(){
			return 'sudah di scroll';
		}

		public function bisa_nyala(){
			return 'bisa nyala gitu';
		}
	}

	$konsep_mouse = new mouse;
	echo $konsep_mouse->bisa_nyala();

?>