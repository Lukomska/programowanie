<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Document</title>
</head>
<body>
    <h1>Lista klientów</h1>
    <?php

require_once("../scripts/connect.php");

$sql = "SELECT customers.name,customers.surname,customers.birthday,customers.height,cities.city FROM customers INNER JOIN cities ON customers.cities_id=cities.id ORDER BY surname";

$result = $connect->query($sql);

echo "<table>";
echo "<tr>
<th>Imię</th>
<th>Nazwisko</th>
<th>Data Urodzenia</th>
<th>Wzrost</th>
<th>Miasto</th>
</tr>";

while ($row = $result->fetch_assoc()) {
    if ($row['height'] == NULL) {
        $height = "-";
    }else{
        $height = $row['height']."cm";
    }

   echo <<<ROW
   <tr>
    <td>$row[name]</td> 
    <td>$row[surname]</td>
    <td>$row[birthday]</td>
    <td>$height</td>
    <td>$row[city]</td>
   </tr>
   ROW;
}
echo "</table>";
$connect->close(); //zamknięcie połączenia z bazą 
?>
</body>
</html>
