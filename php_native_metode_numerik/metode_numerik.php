<?php 

	require_once('rumus.php');

	if (isset($_POST['hitung_biseksi'])) {
		$biseksi = new tugas1;
		$biseksi->biseksi($_POST['batas_a'],$_POST['batas_b'],$_POST['batas_error']);
	}
	if(isset($_POST['hitung_regula_falasi'])){
		$regula_falsi = new tugas2_regula_falsi;
		$regula_falsi->regula_falsi($_POST['batas_a'],$_POST['batas_b'],$_POST['batas_error']);
	}
	if(isset($_POST['hitung_regula_falasi_modifikasi'])){
		$regula_falsi_modifikasi = new tugas2_regula_falsi_modifikasi;
		$regula_falsi_modifikasi->regula_falsi_modifikasi($_POST['batas_a'],$_POST['batas_b'],$_POST['batas_error']);
	}
	if(isset($_POST['hitung_secant'])){
		$secant = new tugas2_secant;
		$batas_b= $_POST['batas_a'] + $_POST['h'];
		$secant->secant($_POST['batas_a'],$batas_b,$_POST['batas_error']);
	}
	if(isset($_POST['hitung_newton'])){
		$newton = new tugas2_newton;
		$newton->newton($_POST['batas_a'],$_POST['batas_error']);
	}
	if(isset($_POST['hitung_beda_depan'])){
		$beda_depan = new tugas3_beda_depan;
		$beda_depan->beda_depan($_POST['xn'],$_POST['h']);
	}
	if(isset($_POST['hitung_beda_belakang'])){
		$beda_belakang = new tugas3_beda_belakang;
		$beda_belakang->beda_belakang($_POST['xn'],$_POST['h']);
	}
	if(isset($_POST['hitung_titik_tengah'])){
		$titik_tengah = new tugas3_titik_tengah;
		$titik_tengah->titik_tengah($_POST['xn'],$_POST['h']);
	}
	if (isset($_POST['hitung_persegi_panjang'])) {
		$persegi_panjang = new tugas4_persegi_panjang;
		$persegi_panjang->persegi_panjang($_POST['batas_a'], $_POST['batas_b'], $_POST['h']);
	}
	if (isset($_POST['hitung_aturan_titik_tengah'])) {
		$titik_tengah = new tugas4_titik_tengah;
		$titik_tengah->titik_tengah($_POST['batas_a'], $_POST['batas_b'], $_POST['h']);
	}
	if (isset($_POST['hitung_trapesoeda'])) {
		$trapesoeda = new tugas4_trapesoeda;
		$trapesoeda->trapesoeda($_POST['batas_a'], $_POST['batas_b'], $_POST['h']);
	}
	if (isset($_POST['hitung_simpson'])) {
		$simpson = new tugas4_simpson;
		$simpson->simpson($_POST['batas_a'], $_POST['batas_b'], $_POST['h']);
	}
	if (isset($_POST['hitung_simpson_sepertiga'])) {
		$simpson = new tugas4_simpson_sepertiga;
		$simpson->simpson_sepertiga($_POST['batas_a'], $_POST['batas_b'], $_POST['h']);
	}
	if (isset($_POST['hitung_simpson_tiga_perdelapan'])) {
		$simpson = new tugas4_simpson_tiga_perdelapan;
		$simpson->simpson_tiga_perdelapan($_POST['batas_a'], $_POST['batas_b'], $_POST['h']);
	}
	if (isset($_POST['hitung_integral_ganda'])) {
		$integral_ganda = new tugas5_integral_ganda;
		$integral_ganda->integral_ganda($_POST['a'], $_POST['b'], $_POST['c'], $_POST['d'], $_POST['hx'], $_POST['hy']);
	}
	if (isset($_POST['hitung_gauss'])) {
		$n = 2;
		for($i=0;$i<=$n;$i++){

			for($j=0;$j<=$n;$j++){
				$a[$_POST['$i$j']][$_POST['$i$j']];
			}
			$b[$_POST[$i]];
		}
	}
?>
