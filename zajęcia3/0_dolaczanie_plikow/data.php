<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h4>Początek pliku</h4>
<?php
echo 'Include:<br>';
include './file.php';
include_once './file.php';

echo Require:'<br>';
require './file.php';
?>



    <h4>Koniec pliku</h4>
</body>
</html>