<?php

//======================================== TUGAS 1 ================================================================

	class tugas1{

		public $hasil,$i;
		public $x,$y,$mid;
		public $a,$b,$error,$result_error;
		public $fa,$fb,$fmid;

		public function mid(float $x, float $y ){
			$this->x = $x;
			$this->y = $y;
			$this->mid = ($this->x+$this->y)/2;
			return $this->mid;
		}

		public function f(float $x){
			$this->hasil = (3*pow($x,2))-(5*$x)-42;
			return $this->hasil;
		}

		public function biseksi(float $a, float $b, float $error){

			$this->a    =  $a;
			$this->b   	=  $b;
			$this->error =  $error;
			
			$f = new tugas1;
			$this->i= 0;
			?>
			<table border="1px">
					<tr>
						<td>i</td>
						<td>a</td>
						<td>b</td>
						<td>mid</td>
						<td>f(a)</td>
						<td>f(mid)</td>
						<td>error</td>
					</tr>
			<?php
			do{

				$this->fa   = $f->f($this->a);
				$this->fb   = $f->f($this->b);
				$this->fmid = $f->f($f->mid($this->a, $this->b));
				$this->result_error = abs(0-$this->fmid);
				$this->mid  = $f->mid($this->a,$this->b);
				
				?>
				
					<tr>
						<td><?php echo $this->i; ?></td>
						<td><?php echo $this->a; ?></td>
						<td><?php echo $this->b; ?></td>
						<td><?php echo $this->mid; ?></td>
						<td><?php echo $this->fa; ?></td>
						<td><?php echo $this->fmid; ?></td>
						<td><?php echo $this->result_error; ?></td>
					</tr>
				
				<?php
				if($this->fa  * $this->fmid > 0){
					$this->a = $this->mid;
				}else{
					$this->b = $this->mid;
				}
				$this->i++;

			}while($this->result_error > $this->error);
			?>
			</table>
			<?php
		}

	}

//======================================== TUGAS 2 ================================================================

	class tugas2_regula_falsi{
		public $hasil,$i;
		public $x,$y,$x_aksen,$y_aksen,$xr;
		public $a,$b,$error,$result_error;
		public $fa,$fb,$fxr;


		public function xr(float $x, float $y, float $x_aksen, float $y_aksen ){
			$this->x = $x;
			$this->y = $y;
			$this->x_aksen = $x_aksen;
			$this->y_aksen = $y_aksen;
			$this->xr = (($this->y_aksen*$this->x) - ($this->x_aksen*$this->y))/($this->y_aksen - $this->x_aksen);
			return $this->xr;
		}

		public function f(float $x){
			$this->hasil = (3*pow($x,2))-(5*$x)-42;
			return $this->hasil;
		}

		public function regula_falsi(float $a, float $b, float $error){

			$this->a    =  $a;
			$this->b   	=  $b;
			$this->error =  $error;
			
			$f = new tugas2_regula_falsi;
			$this->i= 0;
			?>
			<table border="1px">
					<tr>
						<td>i</td>
						<td>a</td>
						<td>b</td>
						<td>f(a)</td>
						<td>f(b)</td>
						<td>xr</td>
						<td>(xr)</td>
						<td>error</td>
					</tr>
					<tr>
						<td colspan="8"><hr></td>
					</tr>
			<?php
			do{

				$this->fa   = $f->f($this->a);
				$this->fb   = $f->f($this->b);
				$this->xr  = $f->xr($this->a, $this->b, $this->fa, $this->fb);
				$this->fxr = $f->f($this->xr);
				$this->result_error = abs(0-$this->fxr);
				
				
				?>
				
					<tr>
						<td><?php echo $this->i; ?></td>
						<td><?php echo $this->a; ?></td>
						<td><?php echo $this->b; ?></td>
						<td><?php echo $this->fa; ?></td>
						<td><?php echo $this->fb; ?></td>
						<td><?php echo $this->xr; ?></td>
						<td><?php echo $this->fxr; ?></td>
						<td><?php echo $this->result_error; ?></td>
					</tr>
				
				<?php
				if($this->fa  * $this->fxr > 0){
					$this->a = $this->xr;
				}else{
					$this->b = $this->xr;
				}
				$this->i++;

			}while($this->result_error > $this->error);
			?>
			</table>
			<?php
		}
	}

	class tugas2_regula_falsi_modifikasi{
		public $hasil,$i;
		public $x,$y,$x_aksen,$y_aksen,$xr;
		public $a,$b,$error,$result_error;
		public $fa,$fb,$fxr;


		public function xr(float $x, float $y, float $x_aksen, float $y_aksen ){ //regula falsi modifikasi
			$this->x = $x;
			$this->y = $y;
			$this->x_aksen = $x_aksen;
			$this->y_aksen = $y_aksen;
			$this->xr = ((($this->y_aksen/2)*$this->x) - ($this->x_aksen*$this->y))/(($this->y_aksen/2) - $this->x_aksen);
			return $this->xr;
		}

		public function f(float $x){
			$this->hasil = (3*pow($x,2))-(5*$x)-42;
			return $this->hasil;
		}

		public function regula_falsi_modifikasi(float $a, float $b, float $error){

			$this->a    =  $a;
			$this->b   	=  $b;
			$this->error =  $error;
			
			$f = new tugas2_regula_falsi_modifikasi;
			$this->i= 0;
			?>
			<table border="1px">
					<tr>
						<td>i</td>
						<td>a</td>
						<td>b</td>
						<td>f(a)</td>
						<td>f(b)</td>
						<td>xr</td>
						<td>(xr)</td>
						<td>error</td>
					</tr>
					<tr>
						<td colspan="8"><hr></td>
					</tr>
			<?php
			do{

				$this->fa   = $f->f($this->a);
				$this->fb   = $f->f($this->b);
				$this->xr  = $f->xr($this->a, $this->b, $this->fa, $this->fb);
				$this->fxr = $f->f($this->xr);
				$this->result_error = abs(0-$this->fxr);
				
				
				?>
				
					<tr>
						<td><?php echo $this->i; ?></td>
						<td><?php echo $this->a; ?></td>
						<td><?php echo $this->b; ?></td>
						<td><?php echo $this->fa; ?></td>
						<td><?php echo $this->fb; ?></td>
						<td><?php echo $this->xr; ?></td>
						<td><?php echo $this->fxr; ?></td>
						<td><?php echo $this->result_error; ?></td>
					</tr>
				
				<?php
				if($this->fa  * $this->fxr > 0){
					$this->a = $this->xr;
				}else{
					$this->b = $this->xr;
				}
				$this->i++;

			}while($this->result_error > $this->error);
			?>
			</table>
			<?php
		}
	}

	class tugas2_secant{
		public $hasil,$i;
		public $x,$y,$x_aksen,$y_aksen,$xr;
		public $a,$b,$error,$result_error;
		public $fa,$fb,$fxr;


		public function xr(float $x, float $y, float $x_aksen, float $y_aksen ){ //secant
			$this->x = $x;
			$this->y = $y;
			$this->x_aksen = $x_aksen;
			$this->y_aksen = $y_aksen;
			$this->xr = (($this->y_aksen*$this->x) - ($this->x_aksen*$this->y))/($this->y_aksen - $this->x_aksen);
			return $this->xr;
		}

		public function f(float $x){
			$this->hasil = (3*pow($x,2))-(5*$x)-42;
			return $this->hasil;
		}

		public function secant(float $a, float $b, float $error){

			$this->a    =  $a;
			$this->b   	=  $b;
			$this->error =  $error;
			
			$f = new tugas2_secant;
			$this->i= 0;
			?>
			<table border="1px">
					<tr>
						<td>i</td>
						<td>a</td>
						<td>b</td>
						<td>f(a)</td>
						<td>f(b)</td>
						<td>xr</td>
						<td>(xr)</td>
						<td>error</td>
					</tr>
					<tr>
						<td colspan="8"><hr></td>
					</tr>
			<?php
			do{

				$this->fa   = $f->f($this->a);
				$this->fb   = $f->f($this->b);
				$this->xr  = $f->xr($this->a, $this->b, $this->fa, $this->fb);
				$this->fxr = $f->f($this->xr);
				$this->result_error = abs(0-$this->fxr);
				
				
				?>
				
					<tr>
						<td><?php echo $this->i; ?></td>
						<td><?php echo $this->a; ?></td>
						<td><?php echo $this->b; ?></td>
						<td><?php echo $this->fa; ?></td>
						<td><?php echo $this->fb; ?></td>
						<td><?php echo $this->xr; ?></td>
						<td><?php echo $this->fxr; ?></td>
						<td><?php echo $this->result_error; ?></td>
					</tr>
				
				<?php
			
				$this->a = $this->b;
				$this->b = $this->xr;
				$this->i++;

			}while($this->result_error > $this->error);
			?>
			</table>
			<?php
		}
	}

	class tugas2_newton{
		public $hasil,$i;
		public $x,$y,$x_aksen,$y_aksen,$xr;
		public $a,$error,$result_error;
		public $fa,$fak,$fxr;


		public function xr(float $a, float $fa, float $fa_aksen){ //newton
			$this->x = $a;
			$this->x_aksen = $fa;
			$this->xx_aksen = $fa_aksen;
			$this->xr = $this->x - $this->x_aksen/$this->xx_aksen;
			return $this->xr;
		}

		public function f(float $x){
			$this->hasil = (3*pow($x,2))-(5*$x)-42;
			return $this->hasil;
		}

		public function f_ak(float $x){
			$this->hasil = (6*$x)-5;
			return $this->hasil;
		}

		public function newton(float $a, float $error){

			$this->a    =  $a;
			$this->error =  $error;
			
			$f = new tugas2_newton;
			$this->i= 0;
			?>
			<table border="1px">
					<tr>
						<td>i</td>
						<td>a</td>
						<td>f(a)</td>
						<td>f'(a)</td>
						<td>xr</td>
						<td>(xr)</td>
						<td>error</td>
					</tr>
					<tr>
						<td colspan="8"><hr></td>
					</tr>
			<?php
			do{

				$this->fa  = $f->f($this->a);
				$this->f_ak= $f->f_ak($this->a);
				$this->xr  = $f->xr($this->a, $this->fa, $this->f_ak);
				$this->fxr = $f->f($this->xr);
				$this->result_error = abs(0-$this->fxr);
				
				
				?>
				
					<tr>
						<td><?php echo $this->i; ?></td>
						<td><?php echo $this->a; ?></td>
						<td><?php echo $this->fa; ?></td>
						<td><?php echo $this->f_ak; ?></td>
						<td><?php echo $this->xr; ?></td>
						<td><?php echo $this->fxr; ?></td>
						<td><?php echo $this->result_error; ?></td>
					</tr>
				
				<?php
			
				$this->a = $this->xr;
				$this->i++;

			}while($this->result_error > $this->error);
			?>
			</table>
			<?php
		}
	}

//======================================== TUGAS 3 ================================================================

	class tugas3_beda_depan{

		public $hasil,$hasil_fxn;
		public $xn,$h;
		public $fxn1,$fxn,$fxnn;
		public $hasil_f_aksen;

		public function f(float $x){
			$this->hasil = (3*pow($x,2))-(5*$x)-42; //beda depan
			return $this->hasil;
		}

		public function fxn(float $xn, float $fxn, float $fxnn ,float $h){
			$this->fxn1 = $xn; //xn+1
			$this->fxn  = $fxn; //xn
			$this->fxnn = $fxnn; //xn-1
			$this->h = $h;
			
			
			$this->hasil_fxn = ($this->fxn1 - $this->fxn)/$this->h;
			return $this->hasil_fxn;

		}

		public function beda_depan(float $x, float $y){
			$this->xn = $x;
			$this->h = $y;
			$f = new tugas3_beda_depan;
			$this->hasil_f_aksen = $f->fxn($f->f($this->xn+$this->h), $f->f($this->xn),$f->f($this->xn-$this->h),$this->h);

			?>	
			<table border="1px">
				<tr>
					<td>h</td>
					<td>xn</td>
					<td>xn+1</td>
					<td>xn-1</td>
					<td>f(xn)</td>
					<td>f(xn+1)</td>
					<td>f(xn-1)</td>
					<td>f'(xn)</td>
				</tr>
				<tr>
					<td colspan="8"><hr></td>
				</tr>
				<tr>
					<td><?php echo $this->h; ?></td>
					<td><?php echo $this->xn; ?></td>
					<td><?php echo $this->xn+$this->h; ?></td>
					<td><?php echo $this->xn-$this->h; ?></td>
					<td><?php echo $f->f($this->xn); ?></td>
					<td><?php echo $f->f($this->xn+$this->h); ?></td>
					<td><?php echo $f->f($this->xn-$this->h); ?></td>
					<td><?php echo $this->hasil_f_aksen; ?></td>
				</tr>
			</table>
			<?php

		}
	}


	class tugas3_beda_belakang{

		public $hasil,$hasil_fxn;
		public $xn,$h;
		public $fxn1,$fxn,$fxnn;
		public $hasil_f_aksen;

		public function f(float $x){
			$this->hasil = (3*pow($x,2))-(5*$x)-42;
			return $this->hasil;
		}

		public function fxn(float $xn, float $fxn, float $fxnn ,float $h){ //beda belakang
			$this->fxn1 = $xn; //xn+1
			$this->fxn  = $fxn; //xn
			$this->fxnn = $fxnn; //xn-1
			$this->h = $h;
			
			
			$this->hasil_fxn = ($this->fxn - $this->fxnn)/$this->h;
			return $this->hasil_fxn;

		}

		public function beda_belakang(float $x, float $y){
			$this->xn = $x;
			$this->h = $y;
			$f = new tugas3_beda_belakang;
			$this->hasil_f_aksen = $f->fxn($f->f($this->xn+$this->h), $f->f($this->xn),$f->f($this->xn-$this->h),$this->h);

			?>	
			<table border="1px">
				<tr>
					<td>h</td>
					<td>xn</td>
					<td>xn+1</td>
					<td>xn-1</td>
					<td>f(xn)</td>
					<td>f(xn+1)</td>
					<td>f(xn-1)</td>
					<td>f'(xn)</td>
				</tr>
				<tr>
					<td colspan="8"><hr></td>
				</tr>
				<tr>
					<td><?php echo $this->h; ?></td>
					<td><?php echo $this->xn; ?></td>
					<td><?php echo $this->xn+$this->h; ?></td>
					<td><?php echo $this->xn-$this->h; ?></td>
					<td><?php echo $f->f($this->xn); ?></td>
					<td><?php echo $f->f($this->xn+$this->h); ?></td>
					<td><?php echo $f->f($this->xn-$this->h); ?></td>
					<td><?php echo $this->hasil_f_aksen; ?></td>
				</tr>
			</table>
			<?php
		}
	}

	class tugas3_titik_tengah{

		public $hasil,$hasil_fxn;
		public $xn,$h;
		public $fxn1,$fxn,$fxnn;
		public $hasil_f_aksen;

		public function f(float $x){
			$this->hasil = (3*pow($x,2))-(5*$x)-42;
			return $this->hasil;
		}

		public function fxn(float $xn, float $fxn, float $fxnn ,float $h){ //beda tengah
			$this->fxn1 = $xn; //xn+1
			$this->fxn  = $fxn; //xn
			$this->fxnn = $fxnn; //xn-1
			$this->h = $h;
			
			
			$this->hasil_fxn = (($this->fxn1 - $this->fxnn)/(2*$this->h));
			return $this->hasil_fxn;

		}

		public function titik_tengah(float $x, float $y){
			$this->xn = $x;
			$this->h = $y;
			$f = new tugas3_titik_tengah;
			$this->hasil_f_aksen = $f->fxn($f->f($this->xn+$this->h), $f->f($this->xn),$f->f($this->xn-$this->h),$this->h);

			?>	
			<table border="1px">
				<tr>
					<td>h</td>
					<td>xn</td>
					<td>xn+1</td>
					<td>xn-1</td>
					<td>f(xn)</td>
					<td>f(xn+1)</td>
					<td>f(xn-1)</td>
					<td>f'(xn)</td>
				</tr>
				<tr>
					<td colspan="8"><hr></td>
				</tr>
				<tr>
					<td><?php echo $this->h; ?></td>
					<td><?php echo $this->xn; ?></td>
					<td><?php echo $this->xn+$this->h; ?></td>
					<td><?php echo $this->xn-$this->h; ?></td>
					<td><?php echo $f->f($this->xn); ?></td>
					<td><?php echo $f->f($this->xn+$this->h); ?></td>
					<td><?php echo $f->f($this->xn-$this->h); ?></td>
					<td><?php echo $this->hasil_f_aksen; ?></td>
				</tr>
			</table>
			<?php
		}
	}

//======================================== TUGAS 3 ================================================================

	class tugas4_persegi_panjang{

		public $hasil_f;
		public $a, $b, $h;
		public $xn,$l;

		public function f(float $x){

			$this->hasil_f = $x * log($x);
			return $this->hasil_f;
		}

		public function persegi_panjang($a, $b, $h){

			$f = new tugas4_persegi_panjang;
			
			$this->a = $a;
			$this->b = $b;
			$this->h = $h;
			$n =($this->b - $this->a)  / $this->h;
			$this->l=0;
			$this->xn = $this->a;

			?>
			<table border="1px">
				<tr>
					<td>i</td>
					<td>a</td>
					<td>b</td>
					<td>h</td>
					<td>n</td>
					<td>xn</td>
					<td>f(xn)</td>
					<td>l</td>
				</tr>
				<tr>
					<td colspan="8"><hr></td>
				</tr>
				<?php

				for($i=0 ; $i<$n ; $i++)
				{
						$this->xn+=$this->h;
						$this->l +=$this->h * $f->f($this->xn);
						?>
						<tr>
						<td><?php echo $i; ?></td>
						<td><?php echo $this->a; ?></td>
						<td><?php echo $this->b; ?></td>
						<td><?php echo $this->h; ?></td>
						<td><?php echo $n; ?></td>
						<td><?php echo $this->xn; ?></td>
						<td><?php echo $f->f($this->xn); ?></td>
						<td><?php echo $this->l; ?></td>
						</tr>
						<?php
				}	
				?>

			</table>
			<?php
		}
	}

	class tugas4_titik_tengah{

		public $hasil_f;
		public $a, $b, $h;
		public $xn,$l;

		public function f(float $x){

			$this->hasil_f = $x * log($x);
			return $this->hasil_f;
		}

		public function titik_tengah($a, $b, $h){

			$f = new tugas4_titik_tengah;
			
			$this->a = $a;
			$this->b = $b;
			$this->h = $h;
			$n =($this->b - $this->a)  / $this->h;
			$this->l=0;
			$this->xn = $this->a;

			?>
			<table border="1px">
				<tr>
					<td>i</td>
					<td>a</td>
					<td>b</td>
					<td>h</td>
					<td>n</td>
					<td>xn</td>
					<td>f(xn)</td>
					<td>f(xn(h/2))</td>
					<td>l</td>
				</tr>
				<tr>
					<td colspan="9"><hr></td>
				</tr>
				<?php

				for($i=0 ; $i<$n ; $i++)
				{
						$this->xn+=$this->h;
						$this->l +=$this->h * $f->f($this->xn+($this->h/2));
						?>
						<tr>
						<td><?php echo $i; ?></td>
						<td><?php echo $this->a; ?></td>
						<td><?php echo $this->b; ?></td>
						<td><?php echo $this->h; ?></td>
						<td><?php echo $n; ?></td>
						<td><?php echo $this->xn; ?></td>
						<td><?php echo $f->f($this->xn); ?></td>
						<td><?php echo $f->f($this->xn+($this->h/2)); ?></td>
						<td><?php echo $this->l; ?></td>
						</tr>
						<?php
				}	
				?>

			</table>
			<?php
		}
	}

	class tugas4_trapesoeda{

		public $hasil_f;
		public $a, $b, $h;
		public $xn,$l;

		public function f(float $x){

			$this->hasil_f = $x * log($x);
			return $this->hasil_f;
		}

		public function trapesoeda($a, $b, $h){

			$f = new tugas4_trapesoeda;
			
			$this->a = $a;
			$this->b = $b;
			$this->h = $h;
			$n =($this->b - $this->a)  / $this->h;
			$this->l=0;
			$this->xn = $this->a;

			?>
			<table border="1px">
				<tr>
					<td>i</td>
					<td>a</td>
					<td>b</td>
					<td>h</td>
					<td>n</td>
					<td>xn</td>
					<td>f(xn)</td>
					<td>f(xn+h)</td>
					<td>l</td>
				</tr>
				<tr>
					<td colspan="9"><hr></td>
				</tr>
				<?php

				for($i=0 ; $i<$n ; $i++)
				{
						$this->xn+=$this->h;
						$this->l +=($this->h/2) * ($f->f($this->xn)+$f->f($this->xn+$this->h));
						?>
						<tr>
						<td><?php echo $i; ?></td>
						<td><?php echo $this->a; ?></td>
						<td><?php echo $this->b; ?></td>
						<td><?php echo $this->h; ?></td>
						<td><?php echo $n; ?></td>
						<td><?php echo $this->xn; ?></td>
						<td><?php echo $f->f($this->xn); ?></td>
						<td><?php echo $f->f($this->xn+$this->h); ?></td>
						<td><?php echo $this->l; ?></td>
						</tr>
						<?php
				}	
				?>

			</table>
			<?php
		}
	}

	class tugas4_simpson{

		public $hasil_f;
		public $a, $b, $h;
		public $xn,$l;

		public function f(float $x){

			$this->hasil_f = $x * log($x);
			return $this->hasil_f;
		}

		public function simpson($a, $b, $h){

			$f = new tugas4_simpson;
			
			$this->a = $a;
			$this->b = $b;
			$this->h = $h;
			$n =($this->b - $this->a)  / $this->h;
			$this->l=0;
			$this->xn = $this->a;

			?>
			<table border="1px">
				<tr>
					<td>i</td>
					<td>a</td>
					<td>b</td>
					<td>h</td>
					<td>n</td>
					<td>xn</td>
					<td>f(xn)</td>
					<td>f(xn+h)</td>
					<td>l</td>
				</tr>
				<tr>
					<td colspan="9"><hr></td>
				</tr>
				<?php

				for($i=0 ; $i<$n ; $i++)
				{
						$this->xn+=$this->h;
						$this->l +=($this->h * ( $f->f($this->xn-($this->h*$this->h)) + (2*$f->f($this->xn-$this->h) + (4*$f->f($this->xn)) + (2*$f->f($this->xn+$this->h)) + $f->f($this->xn+($this->h*$this->h)))))/10;
						?>
						<tr>
						<td><?php echo $i; ?></td>
						<td><?php echo $this->a; ?></td>
						<td><?php echo $this->b; ?></td>
						<td><?php echo $this->h; ?></td>
						<td><?php echo $n; ?></td>
						<td><?php echo $this->xn; ?></td>
						<td><?php echo $f->f($this->xn); ?></td>
						<td><?php echo $f->f($this->xn+$this->h); ?></td>
						<td><?php echo $this->l; ?></td>
						</tr>
						<?php
				}	
				?>

			</table>
			<?php
		}
	}

	class tugas4_simpson_sepertiga{

		public $hasil_f;
		public $a, $b, $h;
		public $xn,$l;

		public function f(float $x){

			$this->hasil_f = $x * log($x);
			return $this->hasil_f;
		}

		public function simpson_sepertiga($a, $b, $h){

			$f = new tugas4_simpson_sepertiga;
			
			$this->a = $a;
			$this->b = $b;
			$this->h = $h;
			$n =($this->b - $this->a)  / $this->h;
			$this->l=0;
			$this->xn = $this->a;
			$iterasi = 0;
			?>
			<table border="1px">
				<tr>
					<td>i</td>
					<td>a</td>
					<td>b</td>
					<td>h</td>
					<td>n</td>
					<td>xn</td>
					<td>f(xn)</td>
					<td>f(xn+h)</td>
					<td>l</td>
				</tr>
				<tr>
					<td colspan="9"><hr></td>
				</tr>
				<?php

				for($i=0 ; $i<$n ; $i=$i+2)
				{
						$this->xn+=(2*$this->h);
						$this->l += $this->h/3 * ($f->f($this->xn-$this->h) + (4*$f->f($this->xn)) + $f->f($this->xn+$this->h));
						?>
						<tr>
						<td><?php echo $iterasi; ?></td>
						<td><?php echo $this->a; ?></td>
						<td><?php echo $this->b; ?></td>
						<td><?php echo $this->h; ?></td>
						<td><?php echo $n; ?></td>
						<td><?php echo $this->xn; ?></td>
						<td><?php echo $f->f($this->xn); ?></td>
						<td><?php echo $f->f($this->xn+$this->h); ?></td>
						<td><?php echo $this->l; ?></td>
						</tr>
						<?php
						$iterasi++;
				}	
				?>
			</table>
			<?php
		}
	}

	class tugas4_simpson_tiga_perdelapan{

		public $hasil_f;
		public $a, $b, $h;
		public $xn,$l;

		public function f(float $x){

			$this->hasil_f = $x * log($x);
			return $this->hasil_f;
		}

		public function simpson_tiga_perdelapan($a, $b, $h){

			$f = new tugas4_simpson_tiga_perdelapan;
			
			$this->a = $a;
			$this->b = $b;
			$this->h = $h;
			$n =($this->b - $this->a)  / $this->h;
			$this->l=0;
			$this->xn = $this->a;
			$iterasi = 0;
			?>
			<table border="1px">
				<tr>
					<td>i</td>
					<td>a</td>
					<td>b</td>
					<td>h</td>
					<td>n</td>
					<td>xn</td>
					<td>f(xn)</td>
					<td>f(xn+h)</td>
					<td>l</td>
				</tr>
				<tr>
					<td colspan="9"><hr></td>
				</tr>
				<?php

				for($i=0 ; $i<$n ; $i=$i+3)
				{
						$this->xn+=(3*$this->h);
						$this->l += ($this->h*3/8) * ($f->f($this->xn-$this->h) + (3*$f->f($this->xn)) + (3*$f->f($this->xn+$this->h) + $f->f($this->xn+($this->h*$this->h))));
						?>
						<tr>
						<td><?php echo $iterasi; ?></td>
						<td><?php echo $this->a; ?></td>
						<td><?php echo $this->b; ?></td>
						<td><?php echo $this->h; ?></td>
						<td><?php echo $n; ?></td>
						<td><?php echo $this->xn; ?></td>
						<td><?php echo $f->f($this->xn); ?></td>
						<td><?php echo $f->f($this->xn+$this->h); ?></td>
						<td><?php echo $this->l; ?></td>
						</tr>
						<?php
						$iterasi++;
				}	
				?>
			</table>
			<?php
		}
	}

	class tugas5_integral_ganda{

		public $a, $b, $c, $d, $hx, $hy;
		public $v, $sigma;
		public $hasil_f;

		public function f(float $x, float $y){

			$this->hasil_f = 2 * $x + $y;
			return $this->hasil_f;

		}

		public function integral_ganda($a, $b, $c, $d, $hx, $hy){

			$f = new tugas5_integral_ganda;

			$this->xa  = $a;
			$this->xb  = $b;
			$this->ya  = $c;
			$this->yb  = $d;
			$this->hx = $hx;
			$this->hy = $hy;

			$this->sigma = 0;
			?>
			<table>
				<tr>
					<td>SIGMA</td>
					<td>f(j,i)</td>
				</tr>
			
			<?php
			for($i = $this->xa; $i<=$this->xb; $i=$i+$this->hx)
			{
				for($j = $this->ya; $j<=$this->yb; $j=$j+$this->hy)
				{
					if($i==$this->xa and $j==$this->ya)
					{
						$this->sigma=$this->sigma + $f->f($j,$i)+$f->f($j,$i);
						?>
						<tr>
						<td><?php echo $this->sigma ?></td>
						<td><?php echo $f->f($j,$i) ?></td>
						</tr>
						<?php

					}else if($i==$this->xb and $j==$this->yb)
					{
						$this->sigma=$this->sigma + $f->f($j,$i)+$f->f($j,$i);
						?>
						<tr>
						<td><?php echo $this->sigma ?></td>
						<td><?php echo $f->f($j,$i) ?></td>
						</tr>
						<?php
					}else{

						if($i==$this->yb-$this->hy and $j==$this->xb-$this->hx){
							$this->sigma=$this->sigma + (4*$f->f($j,$i));
							?>
							<tr>
							<td><?php echo $this->sigma ?></td>
							<td><?php echo $f->f($j,$i) ?></td>
							</tr>
							<?php
						}
						$this->sigma+=(2*$f->f($j,$i))+(4*$f->f($j,$i));
					}
					$this->v=(($this->hx/2)*($this->hy/3))*$this->sigma;
				}
			}

			?>
			</table>
			<?php
			echo "Hasilnya : ".$this->v;
		}
	}
?>