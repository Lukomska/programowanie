<?php
class User
{
    public $name; //właściwość
    public $surname; //właściwość
    public $age; //właściwość
    public $city; //właściwość
    public $height; //właściwość

    public function setData($name,$surname,$age,$city,$height) //metoda
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->age = $age;
        $this->city = $city;
        $this->height = $height;
    }

    public function getData()
    {
        echo <<<SHOW
        <hr>Twoje dane:<br>
        Imię: $this->name<br>
        Nazwisko: $this->surname<br>
        Wiek: $this->age<br>
        Miasto: $this->city<br>
        Wzrost: $this->height<hr>
        SHOW;
    }
}

?>