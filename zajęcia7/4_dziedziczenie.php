<?php

class A //klasa główna
{
    public $a; //właściwość

    public function setA($a) //metoda, po wpisaniu w set(...) przypisuje daną właściwośc
    {
        $this->a = $a; //jeśli jest ustawienie danych to przypisujemu do wł. a =$a
    }

    public function getA() //metoda 
    {
        return $this->a; //zwrócenie danych
    }
}

class B extends A //dziedziczenie po klasie A
{
    private $b;

    public function setB($b) //metoda
    {
        $this->b = $b; 
    }

    public function getB() //metoda
    {
        return $this->b; //zwrócenie danych
    }
}

$objA = new A();
$objA->setA("Obiekt A");
echo $objA->getA(),'<br>';

$objB = new B();
$objB->setB("Objekt B");
echo $objB->getB(),'<br>';
$objB->setA("Obiekt B korzysta z metody klasy A");
echo $objB->a,'<br>';
echo $objB->getA(); 

$objA->b = "test"; //dodanie nowej właściwości do klasy A
echo $objA->b; //wyświetlenie nowej właściwości klasy A

?>