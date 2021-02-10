<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <script src="https://unpkg.com/ionicons@5.2.3/dist/ionicons.js"></script>
    <title>Document</title>
</head>
<body>
    <h1>Lista klientów</h1>
    <?php

if (!isset($_GET['delete_customers'])) {
    if ($_GET['delete_customers'] == 0 || $_GET['delete_customers'] == -1) {
        echo 'Nie usunięto klienta';
    }else if($_GET['delete_customers'] == 1){
        echo 'Prawidłowo usunięto jednego klienta';
    }else{
        echo "Usunięto $_GET[delete_customers] klientów";
    }
}
require_once("../scripts/connect.php");

$sql = "SELECT customers.id,customers.name,customers.surname,customers.birthday,customers.height,cities.city FROM customers INNER JOIN cities ON customers.cities_id=cities.id ORDER BY surname";

$result = $connect->query($sql);

echo "<table>";
echo "<tr>
<th>Id</th>
<th>Imię</th>
<th>Nazwisko</th>
<th>Data Urodzenia</th>
<th>Wzrost</th>
<th>Miasto</th>
<th>Usuń</th>
</tr>";

while ($row = $result->fetch_assoc()) {
    if ($row['height'] == NULL) {
        $height = "-";
    }else{
        $height = $row['height']."cm";
    }

   echo <<<ROW
   <tr>
    <td>$row[id]</td> 
    <td>$row[name]</td> 
    <td>$row[surname]</td>
    <td>$row[birthday]</td>
    <td>$height</td>
    <td>$row[city]</td>
    <td><a href="../scripts/delete_customers.php?id=$row[id]"><ion-icon name="trash-outline"></ion-icon></a></td>
   </tr>
   ROW;
}
echo "</table>";
$connect->close(); //zamknięcie połączenia z bazą 
?>
</body>
</html>
