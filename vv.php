<?php
$ff=$_GET["Nazwisko"];
$vv=$_GET["Imie"];
$hh=$_GET["Tel"];
echo 'Hello ' . $ff . ' '. $vv. ' '. $bb. ' '. $hh ;

$con = new mysqli("127.0.0.1","root","","baza");

$xd=$_GET["hhgg"];

$q="DELETE FROM tab WHERE id='$xd'";
 $wynik=$con->query($q)

?>
