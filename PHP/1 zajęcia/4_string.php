<?php
$text = <<<TEXT
Teb - kurs 
programowania<br>
TEXT;

echo "$text<br>";
echo nl2br($text); //new line 2 break 

$name = 'jANUsZ';
echo "$name<br>";

//zamiana na małe litery
$name = strtolower($name);
echo $name;

//zamiana na duże litery 
echo '<br>';
$name = strtoupper($name);
echo $name;

//zamiana pierwszej litery na dużą a pozostałych na małe 
$name = strtolower($name);
echo '<br>';
$name = ucfirst(strtolower($name));
echo $name;
echo '<br>';

//w obu wyrazach duże litery
$name = "jANUsZ kowALski";
echo ucwords(strtolower($name)),'<br>';


// LOREM IPSUM
$lorem = <<<LOREM
Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit reiciendis quaerat nisi qui, temporibus excepturi corrupti molestias harum aspernatur quis aliquam libero similique aliquid porro veritatis neque in. Earum, dolores.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit reiciendis quaerat nisi qui, temporibus excepturi corrupti molestias harum aspernatur quis aliquam libero similique aliquid porro veritatis neque in. Earum, dolores.<br>
LOREM;

echo $lorem,'<br>';
echo wordwrap($lorem, 40, '<br>');
echo wordwrap($lorem, 40, '<hr>');

//czyszczenie zawartości bufora
ob_clean();

//białe znaki
$name = 'Anna';
$name1 = '  Anna  ';

echo 'Długość $name: ',strlen($name);
echo '<br>Długość $name1: ',strlen($name1);

//wyczyść zmienną $name1 z białych znaków
echo '<br>';
$name1 = trim($name1);
echo $name1;

//czyszczenie białych znaków z lewej strony
echo '<br>';
echo strlen(ltrim($name1));

//czyszczenie białych znaków z prawej strony
echo '<br>';
echo strlen(rtrim($name1)),'<hr>';

//przeszukiwanie ciągów znaków
$address = 'Poznań, ul. Rynek Jeżycki 1,tel. (61) 123-45-67';
echo strstr($address, 'tel');

$address = 'Poznań, ul. Rynek Jeżycki 1,tel. (61) 123-45-67';
echo strstr($address, 'tel', true),'<br>';

//nie zwraca uwagi na wielkość liter
$address = 'Poznań, ul. Rynek Jeżycki 1,tel. (61) 123-45-67';
echo stristr($address, 'Tel'),'<br>';

$mail = strstr('janusz@gmail.com', '@');
echo "$mail<br>";

//tablica ascii
$mail = strstr('janusz@gmail.com', 64);
echo "$mail<br>";


?>