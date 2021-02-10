<?php
require_once('../class/User.php'); 
$name = $_GET['name'];
$surname = $_GET['surname'];
$age = $_GET['age'];
$city = $_GET['city'];
$height = $_GET['height']; 


$person = new User();
    $person->setData($name, $surname, $age, $city,$height);
    $person->getData();

?>