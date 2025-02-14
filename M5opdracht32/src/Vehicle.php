<?php
 
namespace M5opdracht32;
 
abstract class Vehicle
{
    protected string $brand;
    protected string $model;
    protected string $color;
    protected int $year;
    protected string $fuelType;
 
    public function __construct(string $brand, string $model, string $color, int $year, string $fuelType)
    {
        $this->brand = $brand;
        $this->model = $model;
        $this->color = $color;
        $this->year = $year;
        $this->fuelType = $fuelType;
    }
 
    public function setBrand(string $brand){
        $this->brand = $brand;
    }
 
    public function setModel(string $model){
        $this->model = $model;
    }
 
    public function setColor(string $color){
        $this->color = $color;
    }
 
    public function setYear(int $year){
        $this->year = $year;
    }
 
    public function setFuelType(string $fuelType){
        $this->fuelType = $fuelType;
    }
 
    public abstract function getFuelType():string;
    public abstract function printVehicleInfo(): string;
 
}