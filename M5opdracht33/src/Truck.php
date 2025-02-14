<?php
 
namespace M5opdracht33;
 
class Truck extends Vehicle
{
    private int $loadCapacity;
 
    public function __construct(string $brand, string $model, string $color, int $year,string $fuelType, int $loadCapacity)
    {
        parent::__construct($brand, $model, $color, $year, $fuelType);
        $this->loadCapacity = $loadCapacity;
    }
 
    public function setloadCapacity(int $loadCapacity){
        $this->loadCapacity = $loadCapacity;
    }
 
    public function getFuelType(): string {
        return $this->fuelType;
    }
 
        public function printVehicleInfo(): string{
        return "Brand: " . $this->brand . ", " .
        "Model: " . $this->model . ", " .
        "color: " . $this->color . ", " .
        "year: " . $this->year . ", " .
        "fuel type: " . $this->fuelType. ", " .
        "loadCapacity: " . $this->loadCapacity;
    }
}