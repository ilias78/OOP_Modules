<?php

namespace M5opdracht30;

class MotorCycle extends Vehicle {
    
    public bool $offRoad;

    public function __construct(string $brand, string $model, string $year, string $color, bool $offRoad) {
        parent::__construct($brand, $model, $year, $color);
        $this->offRoad = $offRoad;
    }

  public function setOffRoad(bool $offRoad){
    $this->offRoad = $offRoad;
  }

    public function getOffRoad() {
        return $this->offRoad;
    }
}