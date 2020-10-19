<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./homework.css">
    <title>Document</title>
</head>

<body>
    <h4>PODAJ DWIE DŁUGOŚCI</h4>
    <form name="form1" action="./homework_data.php" method="post">
        <input type="text" size=2 name="a" placeholder="cm"><br><br>
        <input type="text" size=2 name="b" placeholder="cm"><br><br>
        <input type="radio" name="po" value="p" checked>Pole<br><br>
        <input type="radio" name="po" value="o">Obwód<br><br>
        <input type="submit" name="oblicz" value="Oblicz"><br><br>
    </form>
</body>

</html>