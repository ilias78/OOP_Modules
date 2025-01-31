<?php

namespace B_Module3;

class Music extends Product
{
    private array $numbers = [];
    private int $durationInMinutes;
 
 
    public function __construct(string $name, string $description, string $brand,
                                float $price, int $durationInMinutes, array $numbers)
    {
        parent::__construct($name, $description, $brand, $price);
        $this->durationInMinutes = $durationInMinutes;
        $this->productType = 'music';
        $this->numbers = [];
    }
 
    public function addNumber(string $number): string
    {
        if (!in_array($number, $this->numbers)) {
            $this->numbers[] = $number;
            return "Number '$number' added successfully.";
        }
        return "Number '$number' already exists.";
    }
 
public function removeNumber(string $number): string
{
    if (($key = array_search($number, $this->numbers)) !== false) {
        unset($this->numbers[$key]);
        return "Number '$number' removed successfully.";
    }
    return "Number '$number' not found.";
}
 
public function getInfo(): array
{
    $info = parent::getInfo();
    $info['numbers'] = $this->numbers;
    $info['durationInMinutes'] = $this->durationInMinutes;
    return $info;
}
 
private function calculateDurationInHours(): float
{
   return $this->durationInMinutes / 60;
     
}
 
 

 
 
}
