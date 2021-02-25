<?php

class A{
    public function show(){
        return "Metoda show z klasy A";
    }
}

class B extends A{
    public function show(){
        return "Metoda show z klasy B";
    }

    public function showA(){
        return parent::show();
    }
}

$objA = new A();
echo $objA->show(),"<br>";

$objB = new B();
echo $objB->show(),"<br>";

// echo A::show() - non static method

echo $objB->showA();

?>