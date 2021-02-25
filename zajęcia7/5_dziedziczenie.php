<?php
require_once('./class/Animal.php');

    $burek = new Dog();
    echo $burek->bark(),"<br>";
    echo $burek->run(),"<br>";
    echo $burek->look(),"<br>";
    echo $burek->breathes(),"<br>";

    $burek->mass = 15;
    $burek->age = 12;
    $burek->breed = "Jamnik";
    $burek->coatColor = "podpalany";

    echo "Burek ma ", $burek->age," lat <br>";
    echo "Burek waży ", $burek->mass," kilogramów <hr>";

    $burek->getDog();

?>