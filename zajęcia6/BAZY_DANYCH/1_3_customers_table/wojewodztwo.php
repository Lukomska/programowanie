<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Document</title>
</head>
<body>
    <h1>Lista województw</h1>
    <?php

   //Połączenie z bazą danych
   $servername = "localhost";
   $username = "root";
   $password = "";
   $db = "teb1";
   $connect = mysqli_connect($servername,$username,$password,$db);

    //Sprawdzenie poprawności z bazą danych
    //echo $connect->connect_errno;

    $sql = "SELECT * FROM states";
    $result = $connect->query($sql);

echo "<table>";
echo "<tr>
<th>Województwa</th>
</tr>";


    while ($row = $result->fetch_assoc()) {
        echo <<<ROW
        <tr>
         <td>$row[state]</td> 
        </tr>
        ROW;
    }
    
    echo "</table>";
    $connect->close(); //zamknięcie połączenia z bazą 
    ?>
</body>
</html>