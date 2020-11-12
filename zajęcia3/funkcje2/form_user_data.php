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

    <?php

if (!empty($_POST['a']) && !empty($_POST['r']) && !empty($_POST['g'])&& !empty($_POST['b']))  
    {
        $a = $_POST['a'];
        echo "Miasto: $a";

        switch ($_POST['color']) 
        {
            case 'r':
                echo "POWRÓT";
                break;
            case 'g':
                echo "<a href=\"form_user.php\">POWRÓT";
                break;
                case 'b':
                    echo "<a href=\"form_user.php\">POWRÓT";
                break;
        }
    } 
    else 
    {
        ?>
        <script>
          history.back();
        </script>
        <?php
    }

    ?>
</body>

</html>