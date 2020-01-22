<?php

session_start ();

$id = $_GET['id'];

$_SESSION['cart'][] = $id;


/*$_SESSION["cart"] = [
    'id' => $id
];*/
redirect('/product?id=' . $id);

//echo session_id();
//echo session_name();
//echo session_status();

