<?php
 
namespace M5opdracht35;
 
class Hydrogen extends Car
{
    private string $fuelCellSize;
    public function __construct(string $brand, string $model, string $color, int $year,string $fuelType, int $sitPlaces,string $fuelCellSize)
    {
        parent::__construct($brand, $model, $color, $year, $fuelType, $sitPlaces);
        $this->fuelCellSize = $fuelCellSize;
    }
 
    public function getFuelType():string{
        return "Hydrogen";
    }
 
    public function setFuelCellSize(string $fuelCellSize){
        $this->fuelCellSize = $fuelCellSize;
    }
 
    public function calculateMileage():int {
        return $this->fuelCellSize * $this->fuelCellSize;
    }
    public function printVehicleInfo(): string{
        return "Brand: " . $this->brand . ", " .
        "Model: " . $this->model . ", " .
        "color: " . $this->color . ", " .
        "year: " . $this->year . ", " .
        "fuel type: " . $this->fuelType. ", " .
        "fuelCellSize: " . $this->fuelCellSize;
    }
}