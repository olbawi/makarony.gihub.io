<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="utf-8">
    <title></title>

    <meta http-equiv="X-Ua-Compatible" content="IE=edge">


</head>

<body>

	<form action="w.php" method="post">

		<label>
			Podaj stanowisko: <input type="text" name="stanowiska">
		</label>

		<input type="submit" value="Pokaż ">

	</form>

<?php

	if(isset($_POST["stanowiska"]))
	{

		if(empty($_POST["stanowiska"]))
		{
			echo '<span style="color:yellow;">Nie podano nazwy klasy!</span>';
		}
		else
		{
			require_once "e.php";

			$conn = mysqli_connect($host, $user, $pass, $db) or die("Błąd połączenia!");

			mysqli_set_charset($conn, "utf8");



      $stanowiska = $_POST["stanowiska"];

			$q = "SELECT Imie, Nazwisko FROM tab, stanowiska WHERE nazwa='$stanowiska' AND stanowiska.id = tab.id_stan";

			$result = mysqli_query($conn, $q) or die("Problemy z odczytem danych!");

			$ile = mysqli_num_rows($result);

			if($ile == 0)
			{
				echo '<span style="color:red;">Nie ma takiego stanowiska</span>';
			}
			else
			{

echo<<<END

	<table>
		<thead>
			<tr>
				<th>Imię</th>
				<th>Nazwisko</th>

			</tr>
		</thead>
		<tbody>

END;


while($row = mysqli_fetch_assoc($result))
{
  echo "\r\n\t\t\t<tr>";
  foreach($row as $col)
  {
    echo "<td>$col</td>";

  }
  echo "</tr>";




}
echo<<<END
\r\n
</tbody>
</table>
END;



}

mysqli_close($conn);

}


}



?>

</body>
</html>
