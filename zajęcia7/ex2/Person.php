<?php


class Person
{
    public $name;
    public $surname;
    public $city;
    public $age;
    public $nationality;

    function __construct($name, $surname, $city, $age, $nationality)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->city = $city;
        $this->age = $age;
        $this->nationality = $nationality;
    }

    function __destruct() //wywołuje się na samym końcu kodu
    {
        echo "Destruktor";
    }

    public function getAll()
    {
        echo <<<SHOW
        Imię: $this->name<br>
        Nazwisko: $this->surname<br>
        Miasto: $this->city<br>
        Wiek: $this->age<br>
        Narodowość: $this->nationality<br>
        <hr>
        SHOW;
    }
}

?>
<?php
