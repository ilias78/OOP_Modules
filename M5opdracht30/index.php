<?php

require_once 'vendor/autoload.php';

use M5opdracht30\Car;
use M5opdracht30\MotorCycle;    
use M5opdracht30\Truck;
use M5opdracht30\Vehicle;

$car = new Car('Toyota', 'Corolla', 2021, 'black', 5);
$motorCycle = new MotorCycle('Yamaha', 'R1', 2021, 'blue', true);
$truck = new Truck('Mercedes', 'Actros', 2021, 'white', 20000);

echo "Car: " . $car->getBrand(). ", ". $car->getModel(). ", ". $car->getYear(). ", ". $car->getColor(). ", ". $car->getSitPlaces(). "<br>";
echo "MotorCycle: " . $motorCycle->getBrand(). ", ". $motorCycle->getModel(). ", ". $motorCycle->getYear(). ", ". $motorCycle->getColor(). ", ". $motorCycle->getOffRoad(). "<br>";
echo "Truck: " . $truck->getBrand(). ", ". $truck->getModel(). ", ". $truck->getYear(). ", ". $truck->getColor(). ", ". $truck->getLoadCapacity(). "<br>";