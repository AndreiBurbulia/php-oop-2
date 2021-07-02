<?php

$users = [
    new User('Andrei', 'Burbulia','12345','Andreiburbulia','andreiburbulia@gmail.com', 'password123'),
    new User('Mario', 'Rossi','12345','mariorossi123','mariorossi123@gmail.com', 'password123'),
    new User('Pinco', 'Rosso','12345','rossopi','rossopi@gmail.com', 'password123'),
    new User('Elisa', 'Crivellari','12345','EliCriv','crivellarieli@gmail.com', 'password123'),
];

$premiumUsers = [
    new PremiumUser ('Andrei', 'Burbulia', 'ID123', 'AndreiBurbulia', 'AndreiBurbulia@email.com', 'Password01', 3, ['a','b'], 50),
];

$products = [
    new Product('Asus Gaming Laptop','Best laptop for gaming', 1299, 10, 'laptop'),
    new Product('HP Gaming Laptop','Best laptop for gaming', 1099, 10, 'laptop'),
    new Product('Dell Gaming Laptop','Best laptop for gaming', 999, 10, 'laptop'),
    new Product('Macbook pro','Best laptop for working', 1299, 10, 'laptop'),
    new Product('Macbook air','Best laptop for all', 1299, 10, 'laptop'),
    new Product('Macbook pro','Best laptop for graphic', 1299, 10, 'laptop'),
];

$card1 = new CreditCard('Andrei', 'Burbulia', 123456789, '25/11', 000);
