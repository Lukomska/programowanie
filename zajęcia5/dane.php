<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rodzina</title>
</head>
<body>
    <h1>Ilość członków rodziny: <?php echo $_GET['count']; ?></h1>
    <form method="get">
        <?php
        for ($i=0; $i < $_GET['count'] ; $i++) { 
            $a = $i+1;
            echo '<input type="number" name="wiek" placeholder="Wiek ',$a,'"><br><br>';
        }
        ?>
    </form>
</body>
</html>
