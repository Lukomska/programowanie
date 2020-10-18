<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h4>Formularz z danymi użytkownika</h4>
    <form name="form1" action="./1_zadanko_data.php" method="get">
    <?php

    If (!empty($_GET['name'])) {
        $name = $_GET['name'];
        echo "<input type=\"text\" name=\"name\" value=\"$name\"><br>";
        }else{
            echo '<input type="text" name="name" placeholder="Imię"><br><br>';
        }
    ?>
<br><br>
<?php

If (!empty($_GET['surname'])) {
    $surname = $_GET['surname'];
    echo "<input type=\"text\" name=\"surname\" value=\"$surname\"<br>";
    }else{
        echo '<input type="text" name="surname" placeholder="Nazwisko"><br>';
    }
?><br>
    
        <input type = "password" name="pass" placeholder="Hasło"><br><br>
        <input type = "text" size="1" name="zipcode" placeholder="00">-
        <input type = "text" size="5" name="zipcode2" placeholder="000"><br><br>
        <h4>Ulubiony kolor</h4>
        <input type="radio" name="color"value="r">Czerwony
        <input type="radio" name="color"value="g">Zielony
        <input type="radio" name="color"value="b">Niebieski<br><br>
        <input type="checkbox" name="statute">Regulamin<br><br>
<?php
switch ($_GET['color']) {
    case 'r':
    ?>
      <script>
        document.form1.elements['r'].checked = true;
        </script>
    <?php
        break;
        case 'g':
            ?>
              <script>
                document.form1.elements['g'].checked = true;
                </script>
            <?php
                break;
                case 'b':
                    ?>
                      <script>
                        document.form1.elements['b'].checked = true;
                        </script>
                    <?php
                        break;
    
}
?>
      

        <input type="submit" value="Wyślij dane">     
    </form>
</body>
</html>