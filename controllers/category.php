<?php

// TODO фильтровать
$id = $_GET['id'];
$category = getCategory($id);

$products = getProductsByCategory($id);

view('category', [
    'category' => $category,
    'products' => $products,
]);