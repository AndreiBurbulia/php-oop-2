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