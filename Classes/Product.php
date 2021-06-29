<?php

class Product
{
    public $name;
    public $description;
    protected $price;
    protected $qty;
    protected $category;

    public function __construct(string $name, string $description, float $price, int $qty, string $category) {
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
        $this->qty = $qty;
        $this->category = $category;
    }
    
    public function setQuantity($qty)
    {
        $this->qty = $qty;
    }

    protected function setPrice($price)
    {
        $this->price = $price;
    }
    
};