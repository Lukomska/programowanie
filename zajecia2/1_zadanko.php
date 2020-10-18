<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h4>Formularz z danymi użytkownika</h4>
    <form action="./1_zadanko_data.php" method="get">
        <input type = "text" name="name" placeholder="Imię"><br><br>
        <input type = "text" name="surname" placeholder="Nazwisko"><br><br>
        <input type = "password" name="pass" placeholder="Hasło"><br><br>
        <input type = "text" size="1" name="zipcode" placeholder="00">-
        <input type = "text" size="5" name="zipcode2" placeholder="000"><br><br>
        <h4>Ulubiony kolor</h4>
        <input type="radio" name="color"value="r">Czerwony
        <input type="radio" name="color"value="g">Zielony
        <input type="radio" name="color"value="b">Niebieski<br><br>

        

        <input type="submit" value="Wyślij dane">     
    </form>
</body>
</html>