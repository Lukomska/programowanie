<?php 
  function f(){
    echo 'Funkcja';
  }

  f();

  function f1(){
    return 'Funkcja nr 1';
  }

  echo '<br>',f1(),'<br>';

  function show($name){
    return "Imię: $name";
  }

  echo show('Anna'),'<br>';
  
  $name1 = 'Krystian';
  echo show($name1),'<br>';

  // zdefiniuj funkcję dodawanie 
  // wywołaj funkcję dodawanie z dwoma argumentami

  function add($x, $y){
    return $x + $y;
  }

  echo add(3, 5);
  echo add(10, 5),'<br>';

  $a1 = 10;
  $b1 = 20;
  $result = add($a1, $b1);
  echo "Wynik dodawania $a1 i $b1 wynosi: $result<br>";

  // oblicz średnią dwóch zmiennych a1 oraz b1 i wynik wyświetl w formacie: 
  // Średnia ... i ... wynosi: ...
  // wykorzystaj funkcję add() 

  $avg = add($a1 ,$b1) /2;
  echo "Średnia $a1 i $b1 wynosi: $avg<br>";

  function number($x){
    return $x;
  }

  $result = number(10);
  echo "$result<br>";
  echo gettype($result),"<br>"; //integer
  
  $result = number(10.5);
  echo "$result<br>";
  echo gettype($result),"<br>"; //double

  function calkowita($x):int{
    return $x;
  }

  echo calkowita(10),'<br>';
  echo calkowita(10.5),'<br>'; //10

  function real($x):float{
    return $x;
  }

  echo real(10),'<br>';
  echo real(10.5),'<br>'; //10.5

  function data(int $a, float $b){
    return $a+$b;
  }

  echo data(2, 3); //5
  echo data(2.9999, 3); //5
  echo data(2.5, 3.5); //5.5

// podłoga
$x = floor(2.9999);
echo "<hr>$x"; //2
$x = floor(-2.9999);
echo "<br>$x"; //-3

// sufit
$x = ceil(2.9999);
echo "<br>$x"; //3
$x = ceil(-2.9999);
echo "<br>$x"; //-2
