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
    $connect = mysqli_connect("localhost","root","","teb1");

    //Sprawdzenie poprawności z bazą danych
    //echo $connect->connect_errno;

    $sql = "SELECT * FROM customers";
    $result = $connect->query($sql);

    while ($row = $result->fetch_assoc()) {
        echo $row['name'],"<br>";
    }
    $connect->close(); //zamknięcie połączenia z bazą 
    ?>
</body>
</html>