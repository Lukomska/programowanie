<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Document</title>
</head>
<body>
<?php
if (isset($_SESSION['error'])) {
    echo $_SESSION['error'];
    unset($_SESSION['error']);
}

?>
    <h1>Strona Główna</h1>
    <a href="./site/klient.php">Lista Klientów<br></a>
    <a href="./site/miasto.php">Lista Miast<br></a>
    <a href="./site/wojewodztwo.php">Lista Województw<br></a>
    <a href="./site/statystyki.php">Statystyki<br></a>
    <a href="./site/klienci_usuwanie.php">Klienci - usuwanie<br></a>
    <a href="./site/klienci_dodawanie.php">Klienci - dodawanie<br></a>
</body>
</html>