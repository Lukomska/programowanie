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

echo $lorem;

?>