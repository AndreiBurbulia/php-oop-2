<?php

class Laptop extends Product
{
    protected $make;
    protected $model;
    protected $ram;
    protected $processor;
    protected $graphic;

    public function __construct(string $name, string $description, float $price, int $qty, string $category, string $make, string $model,
    int $ram, string $processor, string $graphic) {
        parent::__construct($name, $description, $price, $qty, $category);
        $this->make = $make;
        $this->model = $model;
        $this->ram = $ram;
        $this->processor = $processor;
        $this->graphic = $graphic;
    }

    public function setRam(int $ram)
    {
        $this->ram = $ram;
    }
    public function setProcessor(string $processor)
    {
        $this->processor = $processor;
    }
    public function setGraphic(int $graphic)
    {
        $this->graphic = $graphic;
    }

}