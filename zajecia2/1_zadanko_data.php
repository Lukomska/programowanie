<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dane</title>
</head>
<body>
<h4>Dane pobrane z formularza</h4>
<?php
//dodaj pole imie oraz kod pocztowy (składa się z dwóch pól, pierwsze ma rozmiar 2 , drugie 3)

echo <<<T
    Imię: $_GET[name]<br>
    Nazwisko: $_GET[surname]<br>
    Kod Pocztowy: $_GET[zipcode]
    - $_GET[zipcode2]
    T;

 ?>   
    
    
</body>
</html>