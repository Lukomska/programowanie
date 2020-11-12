<?php
//zmienne globalne

$global = 10
//echo $global

function show(){
    echo "Wartość \$global w funkcji: $GLOBALS[global]";
}
show();

//zmienna lokalna
function number(){
    $x = 10;
    echo "Zmienna wynosi: $x<br><br>";
}
number();
//echo $x; //error

//zmienne statyczne
function add(){
    $x = 4;
    //$x = $x + 10;
    $x += 10;
    echo "\$x = $x";
}
add();
echo '<br>';
function add1(){
    static $x = 4;
    //$x = $x + 10;
    $x += 10;
    echo "\$x = $x";
}
add1();
echo '<br>';

//przekazywanie argumentów
//przekazywanie argumentów przez wartość

function addThree($x){
    $x += 3;
}
$number = 5;

echo"\$number przed wywołaniem funkcji: $number<br>";
addThree($number);

//utworzyć funkcję addFour, przekazywanie argumentów przez referencje 

function addFour(&$x){
    $x += 4;
}
$number = 1;

echo"\$number przed wywołaniem funkcji: $number<br>";
addFour($number);
?>