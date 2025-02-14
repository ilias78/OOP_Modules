<?php
 
require_once ("vendor/autoload.php");
 
use M5opdracht34\Car;
use M5opdracht34\Motorcycle;
use M5opdracht34\Truck;
use M5opdracht34\Vehicle;
use M5opdracht34\ElectricCar;
use M5opdracht34\Gasoline;
use M5opdracht34\Hydrogen;
 
 
$carElectric = new ElectricCar("Tesla", "Model S", "Red", 2020, "electric", 5, 100);
$Gasoline = new Gasoline("Audi", "A6", "Blue", 2018, "benzine", 5, "2.0");
$Hydrogen = new Hydrogen("Toyota", "Mirai", "White", 2021, "Hydrogen", 5, "100");
$motorcycle = new Motorcycle("Yamaha", "R1", "Black", 2021, "benzine", false);
$truck = new Truck("Scania", "R500", "Yellow", 2019, "diesel", 5000);

foreach (Vehicle::getAllVehicles() as $vehicle) {
    echo $vehicle->printVehicleInfo() . "<br>" . "<br>";
}
 
// echo $carElectric->printVehicleInfo() . "<br>";
// echo $Gasoline->printVehicleInfo() . "<br>";
// echo $Hydrogen->printVehicleInfo() . "<br>";
// echo $motorcycle->printVehicleInfo() . "<br>";
// echo $truck->printVehicleInfo();
 
// var_dump($car);
// var_dump($motorcycle);
// var_dump($truck);