<?php 
		 $hasil;
		 $i;
		 $x;
		 $y;
		 $mid;
		 $result_error;
		 $fa; $fb;$fmid;


		 function mid(float $x, float $y ){
			$mid = ($x+$y)/2;
			return $mid;
		}

		function kata(){
			echo "haloo";
		}
		 function f(float $x){
			$hasil = 3*pow($x,2)-5*$x-42;
			kata();
			return $hasil;
		}

		 function biseksi(){
		 	$a = 0;$b=5;$error=0.001;
			$i= 0;
			do{

				$fa = f($a);
				$fb = f($b);
				$fmid = f($tmp_mid);
				$result_error = abs(0-$fc);
				?>
				<table>
					<tr>
						<td>i</td>
						<td><?php echo $i; ?></td>
					</tr>
					<tr>
						<td>a</td>
						<td><?php echo $a; ?></td>
					</tr>
					<tr>
						<td>b</td>
						<td><?php echo $b; ?></td>
					</tr>
					<tr>
						<td>mid</td>
						<td><?php echo $mid; ?></td>
					</tr>
					<tr>
						<td>f(a)</td>
						<td><?php echo $fa; ?></td>
					</tr>
					<tr>
						<td>f(mid)</td>
						<td><?php echo $fmid; ?></td>
					</tr>
					<tr>
						<td>error</td>
						<td><?php echo $result_error; ?></td>
					</tr>
				</table>
				<?php
				if($fa * $fb > 0){
					$a = $mid;
				}else{
					$b = $mid;
				}
				echo "<br>";
				$i++;

			}while($result_error > $error);
			
			echo "Hasil error : ".$result_error."<br>";
			echo "Hasil Xi : ".$mid;

	}

	biseksi();

	//if (isset($_POST['hitung_biseksi'])) {
		// $biseksi = new tugas1;
		// (float) $a = $_POST['batas_a'];
		// (float) $b = $_POST['batas_b'];
		// (float) $c = $_POST['batas_error'];
		// settype($a, "float");
		// settype($b, "float");
		// settype($c, "float");
		// echo $biseksi->f(2);
		//echo $biseksi->mid(40,10);
	//}
?>