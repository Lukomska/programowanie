<?php
$name = 'Jan';
echo 'text';
echo "text<br>";
echo 'Imię: $name<br>';
echo "Imię: $name<br>";

//konkatenacja .
$name = 'Jan'.' Kowalski';
echo "Imię: $name";

// dodawanie
$add = 2 + 3;
echo "$add<br>";

// typy danych
//boolean

$prawda = true;
echo $prawda; // true wyświetli 1 

$fałsz = 0;
echo "$fałsz<br>"; // false nic nie wyświetli

//integer 
$bin = 0b1101; //13
$oct = 01101; //577
$dec = 13; //13
$hex = 0xA1; //161

//interpolacja 
echo $hex,'<hr>';

echo 'a'.'b'.'c'; //wolniejszy sposób od interpolacji 
//a suma b suma c => wyświetli abc
echo 'a','b','c'; // => wyświetl a wyświtl b wyświetl c

// składnia heredoc
$name = "Anna";
echo <<<LABEL
LABEL;

//NOWA ETYKIETA
$imie2 = "Ola Łukomska";
$msc = "Poznań";
$ur = "Poznań";
echo <<<DANE
<hr>
<br><u>Dane użytkownika</u>
<br>Imię i Nazwisko: $imie2
<br>Miejscowość: $msc
<br>Miesce Urodzenia: $ur
DANE;
?>