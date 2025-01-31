<?php

namespace B_Module3;

class Product
{
    private string $name;
    private string $description;
    private string $brand;
    private float $price;
    protected string $productType;
 
    public function __construct(string $name, string $description, string $brand, float $price)
    {
        $this->name = $name;
        $this->description = $description;
        $this->brand = $brand;
        $this->price = $price;
    }
 
    public function printInfo(): string
    {
        $print = "";
        foreach($this->getInfo() as $info)
        {
            if(is_array($info))
            {
                foreach($info as $subinfo)
                {
                    $print .= $subinfo;
                }
            }else{
                $print .= $info;
            }
 
        }
        return $print;
    }
 
    public function getName(): string
    {
        return $this->name;
    }
 
    public function getDescription(): string
    {
        return $this->description;
    }
 
    public function getBrand(): string
    {
        return $this->brand;
    }
 
 
    protected function getProductType(): string
    {
        return $this->productType;
    }
 
    public function setProductType(string $productType): void
    {
        $this->productType = $productType;
    }
 
    public function getPrice(): string
    {
        return $this->price;
    }
 
    public function getInfo(): array
    {
        return [
                $this->getProductType(),
                $this->getName(),
                $this->getDescription(),
                $this->getBrand(),
                $this->getPrice(),
                $this->getProductType()
            ];
               
    }
 
 
   
}
