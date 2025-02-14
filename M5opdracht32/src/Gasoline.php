<?php
 
namespace M5opdracht32;
 
class Gasoline extends Car
{
    private string $engineSize;
    public function __construct(string $brand, string $model, string $color, int $year,string $fuelType,int $sitPlaces, string $engineSize)
    {
        parent::__construct($brand, $model, $color, $year, $fuelType, $sitPlaces);
        $this->engineSize = $engineSize;
    }
 
    public function getFuelType():string{
        return "Gasoline";
    }
 
    public function setEngineSize(string $engineSize){
        $this->engineSize = $engineSize;
    }
 
    public function calculateMileage():int {
 
    }
    public function printVehicleInfo(): string{
        return "Brand: " . $this->brand . ", " .
        "Model: " . $this->model . ", " .
        "color: " . $this->color . ", " .
        "year: " . $this->year . ", " .
        "fuel type: " . $this->fuelType. ", " .
        "engineSize: " . $this->engineSize;
    }
}