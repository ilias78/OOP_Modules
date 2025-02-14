<?php

namespace M5opdracht35;

class VehicleList
{
   private array $vehicles = [];

   public function addVehicle(ElectricCar|Gasoline|Hydrogen|Truck|Motorcycle $vehicle)
   {
       $this->vehicles[] = $vehicle;
   }

   public function getVehicles(): array
   {
       return $this->vehicles;
   }
}