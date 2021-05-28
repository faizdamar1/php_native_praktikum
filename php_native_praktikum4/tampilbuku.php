
<html>
<head></head>
<body>
    
    <link rel="stylesheet" href="css/css.css">
<table>
    <tr>
        <td id="no"><b>No</b></td>
        <td width="30%"><b>Judul</b></td>
        <td width="30%"><b>Pengarang</b></td>
        <td width="30%"><b>Tanggal</b></td>
    </tr>
        <?php
        $no =1;
        include "koneksi.php";
        $data=mysql_query("SELECT * FROM tb_buku");
        while($isi=mysql_fetch_array($data)){
        $jdl=$isi['judul'];
        $penga=$isi['pengarang'];
        $tgl=$isi['tanggal'];
        echo 
           "<tr><td>$no</td>
            <td>$jdl</td>
            <td>$penga</td>
            <td>$tgl</td></tr>
           ";
            $no++;
        }
        ?>
    </tr>
</table>
<br>
<a href="index.php" id="tombol">Tambah data</a>
</body>
</html>

