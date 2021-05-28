<html>
    <head>
        <title>Praktikum 5</title>
    </head>
    <body>
        <form action="prosesedit.php" method="POST">
            <center>
            <h1>FORM DATA MAHASISWA</h1>
            <hr>
            
			<?php
				include 'koneksi.php';
				
				$query = $conn->prepare("select * form tb_mahasiswa 
				where nbi");
					
				$query->execute();
				while($data = $query->fetch()){
			?> 
			<table>			
				<tr>
                    <td>NBI</td>
                    <td>:</td>
                    <td><input type="text" name="nbi" value="<?php echo $data['nbi']; ?>"></td>
				</tr>
				<tr>
					<td>NAMA</td>
					<td>:</td>
					<td><input type="text" name="nama" value="<?php echo $data['nama'] ;?>"> </td>
				</tr>
				<tr>
				    <td>JURUSAN</td>
                    <td>:</td>
                    <td><select name="jurusan">
                            <option value="<?php echo $data['jurusan']; ?>">Teknik Informatika</option>
                            <option value="<?php echo $data['jurusan']; ?>">Teknik Industri</option>
                            <option value="<?php echo $data['jurusan']; ?>">Teknik Mesin</option>
                            <option value="<?php echo $data['jurusan']; ?>">Teknik Arsitektur</option>
                            <option value="<?php echo $data['jurusan']; ?>">Teknik Sipil</option>
                        </select>
					</td>
                
				</tr>
                <tr>
                    <td>JENIS KELAMIN</td>
                    <td>:</td>
                    <td><input type="radio" name="jeniskelamin" value="value="<?php echo $data['jeniskelamin']; ?>"">Pria <br>
                        <input type="radio" name="jeniskelamin" value="value="<?php echo $data['jeniskelamin']; ?>"">PPerempuan <br>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" value="EDIT" name="edit">&nbsp;<input type="reset" value="RESET">
                    </td>
                </tr>
            </table>
			    
			<hr>
			<a href="tampil.php">Tampil data</a>
            </center>        
        </form>
		<?php
		}
		?>
    </body>
</html>