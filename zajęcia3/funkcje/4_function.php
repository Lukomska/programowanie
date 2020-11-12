<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <input type="text" name="name" placeholder="Imię"><br><br>
        <input type="text" name="surname" placeholder="Nazwisko"><br><br>
        <input type="color" name="color" ><br><br>
        <input type="submit" name="button" value="WYŚLIJ">
    </form>
<?php
if(isset($_POST['button'])){

if (!empty($_POST['name']) && !empty($_POST['surname']) && !empty($_POST['button'])&& !empty($_POST['color'])) {
    include './4.1_function.php';
   echo '<hr>',data($_POST['name'],$_POST['surname'],$_POST['color']);
}
else{
    echo 'Wypełnij wszystkie pola';
}

}
?>

</body>
</html>