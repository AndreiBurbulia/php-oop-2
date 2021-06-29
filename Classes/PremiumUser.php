<?php

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