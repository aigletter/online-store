<?php
ini_set('display_errors',1);

session_start();

if (!array_key_exists($_SESSION["cart"]["id"], $_SESSION["cart"])) { ?>

<h1>Корзина пуста</h1>

<?php } else {

    view('cart');
}
?>