<?php

session_start ();

$id = $_GET['id'];

$_SESSION["cart"] = [
    "id" => $id
];

echo $_SESSION["cart"]["id"];

//print_r($id);