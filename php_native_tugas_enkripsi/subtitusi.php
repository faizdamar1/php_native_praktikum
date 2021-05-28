<?php



$tombol = $_POST['enkrip'];
	if(isset($tombol)){
        
		$plain = $_POST['plain'];
        
		
        echo('<div id="container" style="border: 1px solid #000000; width: 327px; padding: 20px;">
				<div style="font-size:15pt"><center>
                    <b>Aplikasi Enkripsi</b></center></div>
				<hr></hr>
				<table>
                    
                    <tr><td>Chiper Text</td>
                        
						<td>:</td>
                        <td><textarea placeholder="Masukan Plain Text ..." style="width: 200px; height: 100px;" name="hasil" value="<?php echo $hasil ?>">'.$hasil = enkrip($plain).'</textarea>
                        </td>
					</tr>
                    
				</table>
				<hr></hr>
                <table>
                        <input type="button" value="Send By Email" onclick="window.location = index.html;"/>
                </table>
              </div>'); 
  }

function enkrip($e) {
    $asli = array("a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z");
    $rep =   array("z","a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y");
    $chiper = str_replace($asli, $rep, $e);
    echo $chiper;
    }

function dekrip($d) {
    $rep =  array("z","a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y");
    $asli = array("a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z");
    $plain = str_replace($rep, $asli, $d);
    echo $plain;
    }
        
        
		

        
?>