<?php



//Simple User Class
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

//Premium User Class
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
    
    
};

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

}