<?php
/*
Oggi pomeriggio provate ad immaginare quali sono le classi necessarie per creare uno shop online; ad esempio, ci saranno sicuramente dei prodotti da acquistare e degli utenti che fanno shopping.
Strutturare le classi gestendo l'ereditarietà dove necessario; ad esempio ci potrebbero essere degli utenti premium che hanno diritto a degli sconti esclusivi, oppure diverse tipologie di prodotti.
Provate a far interagire tra di loro gli oggetti: ad esempio, l'utente dello shop inserisce una carta di credito...
$c = new CreditCard(..); 
$user->insertCreditCard($c);
*/



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
    protected $userName;
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






?>