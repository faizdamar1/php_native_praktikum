
<?php
$host="localhost";
$user="root";
$pass="";
$database="praktikum4";
$konek=mysql_connect($host,$user,$pass);

$pilihdatabase=mysql_select_db($database, $konek);

    if($pilihdatabase)
    {
    }else{
        echo "gagal";
    }
?>