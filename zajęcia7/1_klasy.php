<?php

class User
{
    public $name; //właściwość
    public $surname; //właściwość

    public function setName($name) //metoda
    {
        // $this->name = 'xyz';
        $this->name = $name;
    } 
}

    $person1 = new User;
    $person1->name = 'Janusz';
    $person1->surname = 'Nowak';


    echo "Imię i nazwisko: ",$person1->name,' ',$person1->surname,'<br>';


    $person1->setName('Kowalski');

    echo "Imię i nazwisko: ",$person1->name,' ',$person1->surname,'<br>';

    
?>