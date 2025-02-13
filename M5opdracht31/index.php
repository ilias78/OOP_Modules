<?php

require_once 'vendor/autoload.php';

use M5opdracht31\Car;
use M5opdracht31\MotorCycle;    
use M5opdracht31\Truck;
use M5opdracht31\Vehicle;

$car = new Car('Toyota', 'Corolla', 2021, 'black',5,'Hybrid');
$motorCycle = new MotorCycle('Yamaha', 'R1', 2021, 'blue','Benzine', true);
$truck = new Truck('Mercedes', 'Actros', 2021, 'white',20000,'Diesel', );

echo $car->printVehicleInfo(). "<br>";
echo $motorCycle->printVehicleInfo() . "<br>";
echo $truck->printVehicleInfo();

var_dump($car);
var_dump($motorCycle);
var_dump($truck);
