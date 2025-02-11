<?php

namespace M5opdracht30;

abstract class Vehicle {
    private $brand;
    private $model;
    private $year;
    private $color;

    public function __construct(string $brand, string $model, int $year, $color) {
        $this->brand = $brand;
        $this->model = $model;
        $this->year = $year;
        $this->color = $color;
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

    

}