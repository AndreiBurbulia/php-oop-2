<?php
/*
Oggi pomeriggio provate ad immaginare quali sono le classi necessarie per creare uno shop online; ad esempio, ci saranno sicuramente dei prodotti da acquistare e degli utenti che fanno shopping.
Strutturare le classi gestendo l'ereditarietà dove necessario; ad esempio ci potrebbero essere degli utenti premium che hanno diritto a degli sconti esclusivi, oppure diverse tipologie di prodotti.
Provate a far interagire tra di loro gli oggetti: ad esempio, l'utente dello shop inserisce una carta di credito...
$c = new CreditCard(..); 
$user->insertCreditCard($c);
*/

include 'class.php';


//Users

$user1 = new User('Andrei', 'Burbulia', 'ID123', 'AndreiBurbulia', 'AndreiBurbulia@email.com', 'Password01');
$premiumUser1 = new PremiumUser ('Andrei', 'Burbulia', 'ID123', 'AndreiBurbulia', 'AndreiBurbulia@email.com', 'Password01', 3, ['a','b'], 50);

var_dump($user1);
var_dump($premiumUser1);

/*
//Products
$product1 = new Product('Prodotto1', 'Il prodotto è una prova', 19.99, 1, 'Privata');
var_dump($product1);
*/