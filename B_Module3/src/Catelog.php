<?php

namespace B_Module3;

class Catelog
{
    private array $products = [];
   
    
    public function addProduct(Game|Music|Movie $product)
    {
       return $this->products[] = $product;
    }
 
    
 
    /**
     * @return array
     */
     
    public function getProducts(): array
    {
        return $this->products;
    }
 
 
   
   
    public function removeProduct(Game|Music|Movie $product): void
{
    $key = array_search($product, $this->products, true);
    if ($key !== false) {
        unset($this->products[$key]);
    }
}
 
public function getAveragePrice(): float
{
    $totalPrice = 0;
    foreach ($this->products as $product) {
        $totalPrice += $product->getPrice();
    }
    return count($this->products) > 0 ? $totalPrice / count($this->products) : 0;
}
 
 
 
}