<?php

namespace B_Module3;

class Movie extends Product
{
    private string $quality;
 
    public function __construct(string $name, string $description, string $brand, float $price, string $quality)  
    {
        parent::__construct($name, $description, $brand, $price);
        $this->quality = $quality;
        $this->productType = 'movie';
    }
 
    
    public function getInfo(): array
    {
        $info = parent::getInfo();
        $info['quality'] = $this->quality;
        $info['IMDbRating'] = $this->simulateIMDbRating();
        return $info;
    }
 
 
    private function simulateIMDbRating(): float
    {
        return rand(0, 10);
    }
 
}