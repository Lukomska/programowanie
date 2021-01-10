<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./tabliczka.css">
    <title>Document</title>
</head>
<body>

    <form action="" method="get">
    <input type="text" name="zmienna" placeholder= "podaj liczbę"><br><br>
    <input type="submit" value="Zatwierdz"><br><br>
    </form>

    <table>
<?php
If (!empty($_GET['zmienna'])){
$rozmiar = $_GET['zmienna'];
$row = 1;
do{
    echo "<tr>";
    $col = 1;
    do{
        echo "<td>", $row * $col, "</td>";
        $col++;
    } while ($col <= $rozmiar);
    $row++;
    echo "</tr>";
} while ($row <= $rozmiar);
}
?>
</table>
</body>
</html>


