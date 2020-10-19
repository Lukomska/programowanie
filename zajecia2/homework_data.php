</body>

</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Obliczenia</title>
</head>

<body>
    <h4>Obliczenia</h4>
    <?php


    if (!empty($_POST['a']) && !empty($_POST['b']) && !empty($_POST['po'])) 
    {
        $a = $_POST['a'];
        $po = $_POST['po'];
        $b = $_POST['b'];
        $pole = $a * $b;
        $obwod = ($a + $b)*2;
        switch ($po) 
        {
            case 'p':
                $po = $pole;
                echo "POLE WYNOSI: $po cm<sup>2</sup>";
                break;
            case 'o':
                $po = $obwod;
                echo "OBWÓD WYNOSI: $po cm";
                break;
        }
    }

    ?>
</body>

</html>