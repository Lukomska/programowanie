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

    echo "WERSJA 1<br><br>";
    while ($row = $result->fetch_assoc()) {
        echo <<<ROW
        Imię: $row[name] Nazwisko: $row[surname] Data Urodzenia: $row[birthday] Wzrost: $row[height]
        <br>
        ROW;
    }
   
    $result = $connect->query($sql);
    echo"<hr>";
    echo"<br>";
    echo "WERSJA 2<br><br>";
    while ($row = $result->fetch_assoc()) {
        echo "Imię :$row[name],"." "."Nazwisko: $row[surname],"." "."Data Urodzenia: $row[birthday],"." "."Wzrost: $row[height]<br>"; 
    }


    $result = $connect->query($sql);
    echo"<hr>";
    echo"<br>";
    echo "WERSJA 3<br><br>";
    $i = 0;
    while ($row = $result->fetch_assoc()) {
        $i++;
        echo  "Klient"." "."$i:","<br>","Imię :$row[name],"." "."Nazwisko: $row[surname],"." "."Data Urodzenia: $row[birthday],"." "."Wzrost: $row[height]<br><br>"; 
    }

    $connect->close(); //zamknięcie połączenia z bazą 
    ?>
</body>
</html>