<?php
$ff=$_GET["Imie"];
$vv=$_GET["Nazwisko"];
$hh=$_GET["Tel"];
$bb=$_GET["Stanowisko"];
echo 'Hello ' . $ff . ' '. $vv. ' '. $hh. ' '. $bb ;

$con = new mysqli("127.0.0.1","root","","baza");

$q="INSERT INTO tab (Nazwisko, Imie ,Tel, id_stan ) VALUES ('".$ff."' , '".$vv."' , '".$hh."' , '".$bb."'); ";
 $wynik=$con->query($q)

?>
