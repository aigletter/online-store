<?php
ini_set('display_errors',1);

session_start();

$products = [];
if (!empty($_SESSION["cart"])) {
    $products = getProducts($_SESSION['cart']);
}

view('cart', [
    'products' => $products,
]);