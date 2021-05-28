
<html>
<head lang="en">
    <title>tampilkan</title>
    <meta charset="utf-8">
</head>
<body>

<?php
include "koneksi.php";

$judul=$_POST['judul'];
$pengarang=$_POST['pengarang'];
$tanggal=$_POST['tanggal'];

$db=mysql_query("INSERT INTO tb_buku(judul,pengarang,tanggal)
	values('$judul','$pengarang','$tanggal')");

    if($db >= 1){
        echo "data sudah di masukan ke data base";
    }else{
        
        echo "gagal memasukan di database";
    }
?>

<br><a href="tampilbuku.php">Lihat daftar Buku</a><br>
    <a href="index.php">Menu Awal</a>
</body>
</html>
