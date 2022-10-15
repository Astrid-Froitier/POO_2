<?php

require 'Bicycle.php';
require 'Car.php';
require 'Truck.php';

$car = new Car('red', 4, 'fuel', 30);

var_dump(Car::ALLOWED_ENERGIES);
$bike = new Bicycle('pink',20, 1, 2);

echo $car->start() . '<br>';
echo $car->forward() . '<br>' ;
echo $car->brake() . '<br>';

$bicycle = new Bicycle('blue',10,1,2);
echo $bicycle->forward();
var_dump($bicycle);


$truck = new Truck(30,'pink', 2, 0);

echo $truck->start() . '<br>';
echo $truck->forward() . '<br>' ;
echo $truck->brake() . '<br>';

