</body>

</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./homework.css">
    <title>Obliczenia</title>
</head>

<body>
    <h4>WYNIK</h4>
    <?php

    if (!empty($_POST['a']) && !empty($_POST['b']) && !empty($_POST['po'])) 
    {
        $a = $_POST['a'];
        $po = $_POST['po'];
        $b = $_POST['b'];
        $pole = $a * $b;
        $obwod = ($a + $b) * 2;
        switch ($po) 
        {
            case 'p':
                $po = $pole;
                echo "POLE WYNOSI: $po cm<sup>2</sup><br><br>";
                echo "$a * $b = $po cm<sup>2</sup><br><br>";
                echo "<a href=\"homework.php\">POWRÓT<br><br>";
                break;
            case 'o':
                $po = $obwod;
                echo "OBWÓD WYNOSI: $po cm<br><br>";
                echo "($a + $b) * 2 = $po cm<br><br>";
                echo "<a href=\"homework.php\">POWRÓT<br><br>";
                break;
        }
    } 
    else 
    {
        echo "<a href=\"homework.php\">Wypełnij wszystkie dane<br><br>";
    }
   

    ?>

  

</body>

</html>