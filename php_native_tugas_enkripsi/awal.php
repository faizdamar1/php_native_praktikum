
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="screen.css" type="text/css" media="screen" title="default" />
<title>Enripsi & Deskripsi</title>
</head>
    
    


<body id="login-bg" onLoad="document.form.elements['pesan'].focus();">

<div id="login-holder">
    
    <center>
<img src="logo.png" width="500" height="100" /></a>
    </center>
    
	<div id="loginbox" >
	
      <div id="login-inner">
          <form action="coba.php" method="post">
            <table border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td>
                <table>
                        <tr>
                            <td>PlainText / ChiperText</td>
                            <td><textarea class="login-inp" placeholder="Masukan PlainText / ChiperText ..."  name="pesan"></textarea></td>
				      </tr>
              <tr>
                          <td>Ciphertext </td>
                          <td>
                              <select name="pilih">
                                  <option >Enkripsi</option>
                                  <option >Deskripsi</option>
                              </select>
                          </td>
                     <tr>
                              <td>Hasil</td>
                         <td>
                        <div style="border: none; background: #fff; padding: 5px 5px 0 10px; margin: 0; color: #000; font-size: 16px;                                          width: 390px; height: 150px;" name="txthasil" value="<?php echo $hasil ?> "></div>
                        </td>
				        </tr>
                          <tr>
                              
                          <tr>
                              <td colspan="2" align="center">
                                  <input type="submit" class="submit-login" name="tombol" value="Proses"> 
                                  <input type="reset" class="submit-login" value="Reset" />
                              </td>
                          </tr>
                      </table>
                   </td>
                 </tr>
            </table>
          </form>
      </div>
    
  		<center><font color="#FFFFFF" size="2">Copyright &copy; JARVIS'95</font></center>
 	</div>

</div>

</body>
</html>