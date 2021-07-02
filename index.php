<?php
/*
Oggi pomeriggio provate ad immaginare quali sono le classi necessarie per creare uno shop online; ad esempio, ci saranno sicuramente dei prodotti da acquistare e degli utenti che fanno shopping.
Strutturare le classi gestendo l'ereditarietà dove necessario; ad esempio ci potrebbero essere degli utenti premium che hanno diritto a degli sconti esclusivi, oppure diverse tipologie di prodotti.
Provate a far interagire tra di loro gli oggetti: ad esempio, l'utente dello shop inserisce una carta di credito...
$c = new CreditCard(..); 
$user->insertCreditCard($c);
*/

require_once __DIR__ . '/Classes/User.php';
require_once __DIR__ . '/Classes/Product.php';
require_once __DIR__ . '/Classes/Laptop.php';
require_once __DIR__ . '/Classes/PremiumUser.php';
require_once __DIR__ . '/Classes/CreditCard.php';
require_once __DIR__ . '/db.php';


//Users
$users[0]->setPassword('NuovaPassword123');
$premiumUsers[0]->setLevel(3);
$premiumUsers[0]->setDiscount(15);

//CreditCard
$users[1]->addCrediCard($card1);
$premiumUsers[0]->addCrediCard($card1);


//var_dump($users);

//var_dump($premiumUsers);

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP-2</title>

    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <h1>OOP 2</h1>

    <h2>Users</h2>
    <div class="container">
        <?php foreach ($users as $user) : ?>
        <div class="box">
            <h2><?php echo $user->getName(); ?></h2>
            <h4><?php echo $user->getLastname(); ?></h4>
            <p><?php echo $user->getEmail(); ?></p>
        </div>
        <?php endforeach ?>

    </div>



    <h2>Product</h2>
    <div class="container">
        <?php foreach ($products as $product) : ?>
        <div class="box">
            <h2><?php echo $product->name; ?></h2>
            <p><?php echo $product->description; ?></p>
            <p><?php echo $product->getPrice(); ?> $</p>
        </div>
        <?php endforeach ?>


    </div>



</body>

</html>