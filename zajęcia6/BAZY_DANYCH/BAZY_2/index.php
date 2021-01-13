<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Lista klientów</h1>
    <?php

    //Połączenie z bazą danych
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "teb1";
    $connect = mysqli_connect($servername,$username,$password,$db);

    //Sprawdzenie poprawności z bazą danych
    //echo $connect->connect_errno;

    $sql = "SELECT * FROM customers";
    $result = $connect->query($sql);

    while ($row = $result->fetch_assoc()) {
        echo <<<ROW
        Imię: $row[name] Nazwisko: $row[surname] Data Urodzenia: $row[birthday] Wzrost: $row[height]
        <br>
        ROW;
    }
    $connect->close(); //zamknięcie połączenia z bazą 
    ?>
</body>
</html>