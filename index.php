<?php
// index.php

require_once 'Bicycle.php';
require_once 'Car.php';

$bike = new Bicycle("blue");
$bike->setCurrentSpeed(0);

echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();


var_dump($bike);
$bike->dump();

$twingo = new Car("red", 4, "diesel");

var_dump($twingo);

echo $twingo->start() . '<br>';

echo $twingo->forward();
echo '<br> Vitesse du véhicule : ' . $twingo->getCurrentSpeed() . ' km/h' . '<br>';
echo $twingo->brake();
echo '<br> Vitesse du véhicule : ' . $twingo->getCurrentSpeed() . ' km/h' . '<br>';
echo $twingo->brake();

var_dump($twingo);
