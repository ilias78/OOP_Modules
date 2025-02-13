<?php

namespace M5opdracht31;

abstract class Vehicle {
    private string $brand;
    private string $model;
    private int $year;
    private string $color;
    private $fuelType;
    

    public function __construct(string $brand, string $model, int $year, string $color, string $fuelType) {
        $this->brand = $brand;
        $this->model = $model;
        $this->year = $year;
        $this->color = $color;
        $this->fuelType = $fuelType;
    }

    public function setFuelType(string $fuelType) {
        $this->fuelType = $fuelType;
    }

  
    public function setBrand(string $brand) {
        $this->brand = $brand;
    }

    public function setModel(string $model) {
        $this->model = $model;
    }

    public function setYear(int $year) {
        $this->year = $year;
    }

    public function setColor(string $color) {
        $this->color = $color;
    }

    public function getBrand() {
        return $this->brand;
    }

    public function getModel() {
        return $this->model;
    }

    public function getYear() {
        return $this->year;
    }

    public function getColor() {
        return $this->color;
    }

    public function printVehicleInfo() {
    return "Brand: " . $this->brand . 
    "<br>Model: " . $this->model . 
    "<br>Year: " . $this->year . 
    "<br>Color: " . $this->color .
     "<br>Fuel type: " . $this->fuelType;
    }

    

}