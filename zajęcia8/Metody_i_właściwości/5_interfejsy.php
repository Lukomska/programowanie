<?php
interface PersonInterface{
    public function getName();
    public function getSurname();
}
class Person implements PersonInterface {
    public $name;
    public $surname;
    
    public function __construct($name,$surname)
    {
        $this->name = $name;
        $this->surname = $surname;
    }

    public function getName()
    {
        return $this->name;
    }
    public function getSurname(){
        return $this->surname;
    }
}

class Child extends Person{

}

$obj = new Person("Janusz","Nowak");
$obj->name = "Jan";
echo $obj->getName();
echo $obj->getSurname();

$child = new Child("Anna","Nowak");
$child->name = "Agnieszka";
echo $child->getName();
echo $child->getSurname();
?>