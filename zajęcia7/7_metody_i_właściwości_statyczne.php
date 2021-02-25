<?php

class Operation{
    public static $x = 10;

    public static function add($x,$y){
        return $x + $y;
    }
}

echo Operation::$x,"<br>"; //bez static wyskakiwal błąd
echo Operation::add(2,5),"<br>";

class Operation1{
    public static $x = 10;

    public static function add($y){
        return self::$x + $y;
    }
}

// echo Operation(2) error
echo Operation1::add(2);

//do zmiennych statycznych mamy globalny dostęp 

?>