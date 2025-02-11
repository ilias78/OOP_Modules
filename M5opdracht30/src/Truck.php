<?php

namespace M5opdracht30;

class Truck extends Vehicle {
    
    public int $loadCapacity;

    public function __construct(string $brand, string $model, string $year, string $color, int $loadCapacity) {
        parent::__construct($brand, $model, $year, $color);
        $this->loadCapacity = $loadCapacity;
    }

    public function setLoadCapacity(int $loadCapacity){
        $this->loadCapacity = $loadCapacity;
    }

    public function getLoadCapacity() {
        return $this->loadCapacity;
    }
    
}