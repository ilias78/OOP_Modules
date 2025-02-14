<?php
 
namespace M5opdracht33;
 
abstract class Car extends Vehicle
{
    private int $sitPlaces;
 
    public function __construct(string $brand, string $model, string $color, int $year,string $fuelType, int $sitPlaces)
    {
        parent::__construct($brand, $model, $color, $year, $fuelType);
        $this->sitPlaces = $sitPlaces;
    }
 
    public abstract function getFuelType():string;
 
    public function setsitPlaces(int $sitPlaces){
        $this->sitPlaces = $sitPlaces;
    }
 
    public abstract function calculateMileage(): int;
 
    public function printVehicleInfo(): string{
        return "Brand: " . $this->brand . ", " .
        "Model: " . $this->model . ", " .
        "color: " . $this->color . ", " .
        "year: " . $this->year . ", " .
        "fuel type: " . $this->fuelType. ", " .
        "sit places: " . $this->sitPlaces;
    }
 
}
