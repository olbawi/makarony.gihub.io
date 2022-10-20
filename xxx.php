<html>
    <head>
    <link rel = "stylesheet" href = "er.css" >
</head>
<?php


$con = new mysqli("127.0.0.1","root","","baza");

$q="SELECT * FROM tab";

if($wynik=$con->query($q)){
	echo"<form action='vv.php' method='get' enctype='text/plain'>";
   echo"<table>";
while($row=$wynik->fetch_array()){
    echo "<tr>";
	echo "<td> <input type='radio' name='jj' id='".$row["id"] ."'></input></td>";
	echo "<td>" .$row["id"] .  "</td>";
echo "<td>" .$row["Nazwisko"] .  "</td>";
echo "<td>" .$row["Imie"] .  "</td>";
echo "<td>" .$row["Tel"] .  "</td>";
echo "<input type='hidden'  value='".$row["id"]."' name='hhgg' >" ;

echo"</tr>";
}

echo"</table>";

echo "<input type='submit' value='Usun'>";
}

else{
echo $con->errno . " " . $con->error;}
?>
</html>
