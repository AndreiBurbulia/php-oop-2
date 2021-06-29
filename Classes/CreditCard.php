<?php

class CreditCard
{
    protected $name;
    protected $lastname;
    protected $number;
    protected $deadline;
    protected $secureCode;

    public function __construct(string $name, string $lastname, int $number, string $deadline, int $secureCode ) {
        $this->name = $name;
        $this->lastname = $lastname;
        $this->number = $number;
        $this->deadline = $deadline;
        $this->secureCode = $secureCode;
    }
}