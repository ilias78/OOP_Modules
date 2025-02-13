<?php

namespace M5opdracht31;

class Truck extends Vehicle {
    
    public int $loadCapacity;

    public function __construct(string $brand, string $model, string $year, string $color, int $loadCapacity, string $fuelType) {
        parent::__construct($brand, $model, $year, $color, $fuelType);
        $this->loadCapacity = $loadCapacity;
    }

    public function setLoadCapacity(int $loadCapacity){
        $this->loadCapacity = $loadCapacity;
    }

    public function getLoadCapacity() {
        return $this->loadCapacity;
    }

    public function printVehicleInfo() {
        return parent::printVehicleInfo() . "<br>Load Capacity: " . $this->loadCapacity;
    }
    
}