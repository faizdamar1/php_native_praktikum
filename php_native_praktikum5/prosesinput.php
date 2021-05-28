<?php
	include 'koneksi.php';
	
	if(isset($_POST['kirim'])){
			$nbi = $_POST['nbi'];
			$nama = $_POST['nama'];
			$jurusan = $_POST['jurusan'];
			$jeniskelamin = $_POST['jeniskelamin'];

				$query= $conn->prepare('insert into tb_mahasiswa 
					(nbi,nama,jurusan,jeniskelamin) 
				values 
					(:nbi,:nama,:jurusan,:jeniskelamin)');	
			}
						
			$query->bindparam(':nbi',$nbi);
			$query->bindparam(':nama',$nama);
			$query->bindparam(':jurusan',$jurusan);
			$query->bindparam(':jeniskelamin',$jeniskelamin);
		
			$data = $query->execute();
			if($data > 0){
				echo "data sudah masuk database";
				header('location:tampil.php'); 
				
			}else{
				echo "data gagal masuk di database";
			}

?>