<?php
session_start();
If (!isset($_SESSION['result'])){
    $_SESSION['result'] = 0;
}
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
function add($wynik, $liczba){
return $wynik+$liczba;
}

function sub($wynik, $liczba){
    return $wynik-$liczba;
    }

?>
    <h4>Kalkulator</h4>
    <form method="get">
    <input type="number" name="liczba" placeholder="Liczba"><br><br>
    <input type="number" name="wynik" placeholder="Wynik" value="<?php echo $result; ?>">
    <input type="radio" name="dzialanie" value="dodawanie" placeholder="Dodawanie"><br><br>Dodawanie
    <input type="radio" name="dzialanie" value="odejmowanie" placeholder="Odejmowanie"><br><br>Odejmowanie
    <inmput type="submit" value="Oblicz">    
    </form>
    <?php
    If (isset($_GET['button'])){
        if (!empty($_GET['liczba']) && !empty($_GET['działanie'])) {
            $result = 0;

        switch ($_GET['dzialanie']) {
            case 'dodawanie':
                $_SESSION['result'] = add($_SESSION['result'],$_GET['liczba']);
            break;
                    case 'odejmowanie':  
                $_SESSION['result'] = sub($_SESSION['result'],$_GET['liczba']);
                    break;
            default:
            echo 'Wypełnij prawidłowo pole działanie!';
            exit();
                break;
        }
        echo $$_SESSION['result'];
        }else{
            echo '<hr>Wypełnij wszystkie pola';
        }
    }
    ?>
</body>
</html>