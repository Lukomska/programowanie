<?php
//Połączenie z bazą danych
$servername = "localhost";
$username = "teb_baza";
$password = "3KuelDbxO5Jjiou3";
$db = "teb1";

$connect = @new mysqli($servername,$username,$password,$db);

if ($connect->connect_errno) {
    echo "Numer błędu: ",$connect->connect_errno, "<hr>";
}

/*
Numery błędów:
1045 - username,password
2002 - servername
1049 - db
*/
?>