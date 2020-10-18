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
//1)dodaj pole imie oraz kod pocztowy (składa się z dwóch pól, pierwsze ma rozmiar 2 , drugie 3)

//operatory logiczne AND $$, OR ||

  //Sprawdż czy użytkownik wypełnił wszystkie dane , jeśli tak to wyświetl mu heredoc, w przeciwnym razie przekieruj użytkownika do formularza 


If (!empty($_GET['name']) && !empty($_GET['surname']) && !empty($_GET['pass']) && !empty($_GET['zipcode']) && !empty($_GET['zipcode2'])) {
    echo 'Dane wprowadzone';
    echo <<<T
    Imię i nazwisko: $_GET[name] $_GET[surname]<br>
    Hasło: $_GET[pass]<br>
    Kod Pocztowy: $_GET[zipcode] - $_GET[zipcode2]
    T;
}else{
    header('Location: http://localhost/git/zajecia2/1_zadanko.php');
}
// po nie wypełnieniu danych przekierowuje użytkownika do formularza, dane w formularzu mają być wypełnione (oprocz hasła)
// wykorzystuje skrypt w js (historia)
 ?>   
    
    
</body>
</html>