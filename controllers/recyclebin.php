<?php

session_start ();

$id = $_GET['id'];

$_SESSION['cart'][] = $id;

redirect('/product?id=' . $id);
