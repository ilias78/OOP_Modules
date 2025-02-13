<?php

namespace M5opdracht31;

class MotorCycle extends Vehicle {
    
    public bool $offRoad;

    public function __construct(string $brand, string $model, string $year, string $color, bool $offRoad, string $fuelType) {
        parent::__construct($brand, $model, $year, $color, $fuelType);
        $this->offRoad = $offRoad;
    }

  public function setOffRoad(bool $offRoad){
    $this->offRoad = $offRoad;
  }

    public function getOffRoad() {
        return $this->offRoad;
    }

    public function printVehicleInfo() {
        return parent::printVehicleInfo() . "<br>Off Road: " . $this->offRoad;
    }
}