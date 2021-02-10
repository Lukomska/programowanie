<?php
class Person
{
    public $name;
    function __construct() //podczas tworzenia obiektu jest konstruktor
    {
        echo "Konstruktor";
    }

    function __destruct() //wywołuje się na samym końcu kodu
    {
        echo "Destruktor";
    }
}

$obj = new Person;
$obj->name = "Janusz";
echo "<br>",$obj->name,"<br>";
// exit(); - przerywa wykonywanie kodu
unset($obj); //usunięcie obiektu wcześniej w kodzie , powoduje szybsze wywołanie destruktora
echo "Kod<br>";



?>