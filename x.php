<html>
    <head>
    <link rel = "stylesheet" href = "er.css" >
</head>
<?php


$con = new mysqli("127.0.0.1","root","","baza");

$q="SELECT * FROM tab";

if($wynik=$con->query($q)){
   echo"<table>";
while($row=$wynik->fetch_array()){
    echo"<tr>";
echo "<td>" .$row["Imie"] .  "</td>";
echo "<td>" .$row["Nazwisko"] .  "</td>";

echo "<td>" .$row["Tel"] .  "</td>";
echo"</tr>";}

echo"</table>";
}

else{
echo $con->errno . " " . $con->error;}
?>
</html>
