<html>
<head lang="en">
    <title>Praktikum 4</title>
    <meta charset="utf-8">
</head>
<body>
    <link rel="stylesheet" href="css/style.css">
    <div id="wrapper">
    <form action="proses.php" method="post">
            <fieldset id="kotak">
                <legend>Form Data Buku</legend>
                <center>
                <table>
                    <tr>
                        <td width="40%">Judul</td>
                        <td>:</td>
                        <td><input type="text" name="judul" placeholder="masukan judul..." class="input"></td>
                    </tr>
                    <tr>
                        <td width="40%">Pengarang</td>
                        <td>:</td>
                        <td><input type="text" name="pengarang" placeholder="pengarang..." class="input"></td>
                    </tr>
                    <tr>
                        <td width="40px">Tanggal</td>
                        <td>:</td>
                        <td><input type="date" name="tanggal" placeholder="masukan tanggal.." max="31-12-2000"                                              class="input"></td>
                    </tr>
                    <tr>
                        <td>
                        <input type="submit" value="simpan" name="simpan" class="tombol">
                        <input type="reset" value="reset" name="reset" class="tombol">
                        </td>
                    </tr>
                </table>
                </center>
            </fieldset>
    </form>
    </div>
</body>
</html>