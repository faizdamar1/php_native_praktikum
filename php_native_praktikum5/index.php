<html>
    <head>
        <title>Praktikum 5</title>
    </head>
    <body>
        <form action="prosesinput.php" method="post">
            <center>
            <h1>FORM DATA MAHASISWA</h1>
            <hr>
            <table>
                <tr>
                    <td>NBI</td>
                    <td>:</td>
                    <td><input type="text" name="nbi"></td>
                </tr>
                <tr>
                    <td>NAMA</td>
                    <td>:</td>
                    <td><input type="text" name="nama"</td>
                </tr>
                <tr>
                    <td>JURUSAN</td>
                    <td>:</td>
                    <td><select name="jurusan">
                            <option value="teknik informatika">Teknik Informatika</option>
                            <option value="Teknik Industri">Teknik Industri</option>
                            <option value="Teknik Mesin">Teknik Mesin</option>
                            <option value="Teknik Arsitektur">Teknik Arsitektur</option>
                            <option value="Teknik Sipil">Teknik Sipil</option>
                        </select></td>
                </tr>
                <tr>
                    <td>JENIS KELAMIN</td>
                    <td>:</td>
                    <td><input type="radio" name="jeniskelamin" value="pria">Pria <br>
                        <input type="radio" name="jeniskelamin" value="perempuan">PPerempuan <br>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" value="SIMPAN" name="kirim">&nbsp;<input type="reset" value="RESET">
                    </td>
                </tr>
            </table>
			<hr>
			<a href="tampil.php">Tampil data</a>
            </center>        
        </form>
    </body>
</html>