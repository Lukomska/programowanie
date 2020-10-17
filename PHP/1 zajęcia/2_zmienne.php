<?php
//porównanie
$x = 20;
$y = 20.0;

If ($x === $y) {
    echo "\$x jest równa \$y<br>";
}else {
    echo "\$x nie jest równa \$y<br>";
}

echo gettype($x),'<br>'; //integer
echo gettype($y),'<br>'; //double

// operator <=>

$x = 25;
$y = 20.0;

echo $x <=> $y;

// SWITCH 

$country = 'Polska';
switch ($country) {
    case 'Polska':
        echo '<br>Pochodzisz z Polski';
    break;
    case 'Gruzja':
        echo'<br>Pochodzisz z Gruzji';
    break;
    default:
    echo'<br>Pochodzisz z innego kraju niż Polska lub Gruzja';
break;
}

//zadanie 1

$a = 7.5;
$b = 10;

switch ($a <=> $b){
    case $b <=> $a:
        echo'<br><b>Zmienna A jest większa od zmiennej B';
    break;
    case $a <=> $b:
        echo'<br><b>Zmienna B jest większa od zmiennej A';
    break;
    default:
    echo'<br><b>Zmienna A i B jest równa';
break;       
}

echo '<hr>'; //linia

// postinkrementacja $x++ => $x = $x + 1
$x = 10;
echo $x++; 
echo $x; 
// postdekrementacja $x-- => $x = $x - 1
echo --$x; 
// preinkermentacja ++$x 
echo ++$x; 
// predekrametnacja --$x 
echo --$x; 

echo '<hr>';


?>