<?php
abstract class Person{
public function speak(){
 return "Osoba mówi";
}
}

class Child extends Person{
    public function speak(){
       return parent::speak();
    }
    
}

$person = new Child();
echo $person->speak();

//można utowrzyć metode w klasie abstrakcyjnej i wywołać ja na obiekcie który jest klasy dziedziczącej 
?>