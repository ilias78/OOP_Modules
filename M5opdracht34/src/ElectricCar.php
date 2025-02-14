<?php
 
namespace M5opdracht34;
 
class ElectricCar extends Car
{
    private string $batteryType;
    public function __construct(string $brand, string $model, string $color, int $year,string $fuelType,int $sitPlaces, string $batteryType)
    {
        parent::__construct($brand, $model, $color, $year, $fuelType, $sitPlaces);
        $this->batteryType = $batteryType;
    }
 
    public function getFuelType():string{
        return "Electric";
    }
 
    public function setBatteryType(string $batteryType){
        $this->batteryType = $batteryType;
    }
 
    public function calculateMileage():int {
        return $this->batteryType * 20;
    }
 
    public function printVehicleInfo(): string{
        return "Brand: " . $this->brand . ", " .
        "Model: " . $this->model . ", " .
        "color: " . $this->color . ", " .
        "year: " . $this->year . ", " .
        "fuel type: " . $this->fuelType. ", " .
        "batteryType: " . $this->batteryType;
    }
}
