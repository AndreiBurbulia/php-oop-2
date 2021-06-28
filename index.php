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
#var_dump($user1);
$user1->setPassword('NuovaPassword123');
#var_dump($user1);
#var_dump($user1->getuserName());

$premiumUser1 = new PremiumUser ('Andrei', 'Burbulia', 'ID123', 'AndreiBurbulia', 'AndreiBurbulia@email.com', 'Password01', 3, ['a','b'], 50);
#var_dump($premiumUser1);
$premiumUser1->setLevel(3);
$premiumUser1->setDiscount(15);
#var_dump($premiumUser1);


/**/
//Products
$product1 = new Product('Prodotto1', 'Il prodotto è una prova', 19.99, 1, 'Privata');
#var_dump($product1);

$laptop1 = new Laptop('Asus Gaming Laptop', 'Best laptop for gaming', 1299, 50, 'laptop', 'Asus', 'ROG', 32, 'Intel i9', 'Asus Graphic Card');
#var_dump($laptop1);


//CreditCard

$card1 = new CreditCard('Andrei', 'Burbulia', 123456789, 25/11, 000);
var_dump($card1);

$user1->addCrediCard($card1);
var_dump($user1);

$premiumUser1->addCrediCard($card1);
var_dump($premiumUser1);
var_dump($premiumUser1->creditCard); //non me la fa vedere perche e una variabile protetta