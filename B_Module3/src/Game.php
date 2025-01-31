<?php

namespace B_Module3;

class Game extends Product
{
    private string $genre;
    private array $requirements=[];
 
public function __construct(string $name, string $description, float $price, string $brand, string $genre, array $requirements)
{
    parent::__construct($name, $description, $brand, $price);
    $this->genre = $genre;
    $this->requirements = $requirements;
    $this->productType = 'game';
}
 
public function addRequirement(string $requirement): void
{
    $this->requirements[] = $requirement;
}
 
public function removeRequirement(string $requirement): void
{
    $index = array_search($requirement, $this->requirements);
    if ($index !== false) {
        unset($this->requirements[$index]);
    }
}
 
public function getInfo(): array
{
    $info = parent::getInfo();
    $info['genre'] = $this->genre;
    $info['requirements'] = $this->requirements;
    $info['recommendedAge'] = $this->calculateRecommendedAge();
    return $info;
}
 
private function calculateRecommendedAge(): string
{
   
    switch ($this->genre) {
        case 'action':
            return '16+';
        case 'adventure':
            return '12+';
        default:
            return 'all ages';
    }
}
   
 
   
}