<?php
namespace M5opdracht34;
 
class Motorcycle extends Vehicle
{
    private bool $offRoad;
 
    public function __construct(string $brand, string $model, string $color, int $year,string $fuelType, bool $offRoad)
    {
        parent::__construct($brand, $model, $color, $year, $fuelType);
        $this->offRoad = $offRoad;
    }
 
    public function setoffRoad(bool $offRoad){
        $this->offRoad = $offRoad;
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
        "offRoad: " . $this->offRoad;
    }
}