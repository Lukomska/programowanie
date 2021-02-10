<?php

require_once('./Person.php');

$person1 = new Person('Jan','Nowak','Poznań',45,'Polska');
$person2 = new Person('Anna','Kowalska','Gniezno',78,'Polska');

$person1->getAll();
$person2->getAll();

?>