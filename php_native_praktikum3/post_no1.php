<?php
$nbi=$_POST["nbi"];
$nama=$_POST['nama'];
$jurusan=$_POST["jurusan"];
$gender=$_POST["gender"];
?>

<html>
<head><title>proses POST</title></head>
<body>
    <link rel="stylesheet" href="css/css1.css">
    
    <table border="1" align="center" paddingcell="0">
        <tr class="nganu">
            <td>NBI </td>
            <td>:</td>
            <td><?php echo $nbi; ?></td>
        </tr>
        <tr class="nganu">
            <td>Nama </td>
            <td>:</td>
            <td><?php echo $nama; ?></td>
        </tr>
        <tr class="nganu">
            <td>Jurusan </td>
            <td>:</td>
            <td><?php echo $jurusan; ?></td>
        </tr>
        <tr class="nganu">
            <td>Jenis Kelamin</td>
            <td>:</td>
            <td><?php echo $gender ?></td>
        </tr>
        <tr>
            <td colspan="4"><a href="no1.php" align="center">Menu Input</a></td>
        </tr>
    </table>
</body>
</html>
