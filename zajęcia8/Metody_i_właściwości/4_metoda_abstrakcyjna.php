<?php
abstract class Person{
    abstract public function getName();
}

class Child{
    public function getName(){
        return "Imię dziecka";
    }
    public function go(){
        return "Dziecko idzie";
    }
}


// echo (new Child())->go();
// echo Child::go(); musi byc metoda statyczna zeby to wywolac

$obj = new Child();

?>