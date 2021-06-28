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
    protected $creditCard;

    public function __construct(string $name, string $lastname, string $id, string $userName, string $email, string $password) {
        $this->name = $name;
        $this->lastname = $lastname;
        $this->id = $id;
        $this->userName = $userName;
        $this->email = $email;
        $this->password = $password;
    }

    public function getuserName()
    {
       return $this->userName;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }

    public function addCrediCard($card)
    {
        $this->creditCard = $card;
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

    public function setLevel($level)
    {
        $this->level = $level;
    }

    public function setDiscount($discount)
    {
        $this->discount = $discount;
    }
}

//CreditCard Class
class CreditCard
{
    protected $name;
    protected $lastname;
    protected $number;
    protected $deadline;
    protected $secureCode;

    public function __construct(string $name, string $lastname, int $number, int $deadline, int $secureCode ) {
        $this->name = $name;
        $this->lastname = $lastname;
        $this->number = $number;
        $this->deadline = $deadline;
        $this->secureCode = $secureCode;
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
    
    public function setQuantity($qty)
    {
        $this->qty = $qty;
    }

    protected function setPrice($price)
    {
        $this->price = $price;
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