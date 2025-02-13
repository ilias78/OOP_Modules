<?php

namespace M5opdracht31;

class car extends Vehicle 
{
    public int $sitPlaces;

    public function __construct(string $brand, string $model, string $year, string $color, int $sitPlaces, string $fuelType) {
        parent::__construct($brand, $model, $year, $color, $fuelType);
        $this->sitPlaces = $sitPlaces;
    }

    public function setSitPlaces(int $sitPlaces){
        $this->sitPlaces = $sitPlaces;
    }

    public function getSitPlaces() {
        return $this->sitPlaces;
    }

    public function printVehicleInfo() {
        return parent::printVehicleInfo() . "<br>Sit Places: " . $this->sitPlaces;
    }
    
}