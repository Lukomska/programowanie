<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <script src="https://unpkg.com/ionicons@5.2.3/dist/ionicons.js"></script>
    <title>Statystyki</title>
</head>
<body>
    <h1>Statystyki</h1>
    <?php

require_once("../scripts/connect.php");
require_once("../scripts/function.php");

//ilość osób
echo "<h3>Ilość osób</h3>";
?>
<form nethod="GET">
<input type="number" name="limit"><br><br>
<input type="submit" name="button"><hr>
</form>
<?php

//pobranie ilości osób z formularza
(!empty($_GET['limit'])) ? $limit = $_GET['limit'] : $limit = 3;


//wzrost
//sortowanie wzrostu
IF(isset($_GET['sortHeight'])){
    $sortHeight = $_GET['sortHeight'];
    }else{
        $sortHeight = 'desc';
    }

$sql = "SELECT customers.name,customers.surname,customers.birthday,customers.height,cities.city FROM customers INNER JOIN cities ON customers.cities_id=cities.id WHERE height IS NOT NULL ORDER BY height $sortHeight LIMIT $limit";

$result = $connect->query($sql);



echo"<h3>Wzrost - 3 najwyższe osoby <a href=\"?sortHeight=desc\"><ion-icon name=\"arrow-down-outline\"></ion-icon></a>  <a href=\"?sortHeight=asc\"><ion-icon name=\"arrow-up-outline\"></ion-icon></a></h3>";


echo "<ol>";
while ($row = $result->fetch_assoc()) {
   echo <<<ROW
    <li>$row[name]
    $row[surname]
    $row[height] cm</li>
   ROW;
}
echo "</ol>";


//dataurodzenia,najstarsze osoby
$sql = "SELECT customers.name,customers.surname,customers.birthday,year(customers.birthday) AS rok FROM customers INNER JOIN cities ON customers.cities_id=cities.id WHERE birthday IS NOT NULL ORDER BY birthday LIMIT $limit";

$result = $connect->query($sql);

echo "<br>";
echo"<h3>Wzrost - 3 najstarsze osoby</h3>";
echo "<ol>";

while ($row = $result->fetch_assoc()) {
//    $year = year($row['birthday']);
   echo <<<ROW
    <li>
    $row[name] $row[surname],
    data urodzenia: $row[birthday], 
    rok urodzenia: $row[rok]
    </li>
   ROW;
}
echo "</ol>";

$connect->close(); //zamknięcie połączenia z bazą 
?>
</body>
</html>
