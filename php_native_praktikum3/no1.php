<html>
<head lang="en">
    <title>Praktikum 3</title>
    <meta charset="utf-8">
</head>
<body>
    <link rel="stylesheet" href="css/css1.css">
<center>
        <div id="wrapper">
        <form action="post_no1.php" method="post">
        <h1>FORM TAMBAH DATA MAHASISWA</h1>
        
        <div id="main">
            <hr>
            <table border="0" id="border">
                <tr>
                    <td>NBI</td>
                    <td>:</td>
                    <td><input type="text" name="nbi" size="25" placeholder="Masukan nbi.."></td>
                </tr>
                <br>
                <tr>
                    <td>NAMA</td>
                    <td>:</td>
                    <td><input type="text" name="nama" size="25" placeholder="masukan nama.."></td>
                </tr>
                <tr>
                    <td>JURUSAN</td>
                    <td>:</td>
                    <td>
                        <select name="jurusan">
                            <option>Teknik Informatika</option>
                            <option>Teknik Industri</option>
                            <option>Teknik Mesin</option>
                            <option>Teknik Elektro</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>JENIS KELAMIN</td>
                    <td>:</td>
                    <td><input type="radio" name="gender" value="pria">pria
                        <input type="radio" name="gender" value="wanita">wanita
                    </td>
                </tr>
                <tr>
                    <td colspan="3">
                    <center>
                        <br>
                        <input type="submit" name="simpan" value="SIMPAN" id="submit">
                        <input type="reset" name="reset" value="RESET" id="reset">
                    </center>
                    </td>
                    
                </tr>
            </table>    
        </div>
        </form>
    <hr>
    </div>
</center>
</body>
</html>