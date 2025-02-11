<?php

namespace M5opdracht30;

class car extends Vehicle 
{
    public int $sitPlaces;

    public function __construct(string $brand, string $model, string $year, string $color, int $sitPlaces) {
        parent::__construct($brand, $model, $year, $color);
        $this->sitPlaces = $sitPlaces;
    }

    public function setSitPlaces(int $sitPlaces){
        $this->sitPlaces = $sitPlaces;
    }

    public function getSitPlaces() {
        return $this->sitPlaces;
    }
    
}