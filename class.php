<?php

class Product
{
    protected $name;
    protected $description;
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
    
    
};


class User
{
    protected $name;
    protected $lastname;
    protected $id;
    public $userName;
    protected $email;
    protected $password;

    public function __construct(string $name, string $lastname, string $id, string $userName, string $email, string $password) {
        $this->name = $name;
        $this->lastname = $lastname;
        $this->id = $id;
        $this->userName = $userName;
        $this->email = $email;
        $this->password = $password;
    }


};


class PremiumUser extends User 
{
    protected $level;
    protected $reservedCategory;
    protected $discount;

    public function __construct(string $name, string $lastname, string $id, string $userName, string $email, string $password, 
    int $level, array $reservedCategory, int $discount) {

        parent::__construct($name, $lastname, $id, $userName, $email, $password);
        $this->level = $level;
        $this->reservedCategory = $reservedCategory;
        $this->discount = $discount;

    }
}