<?php

if (empty($_GET['id'])) {
    redirect('/');
}

// TODO фильтровать
$id = $_GET['id'];
$category = getCategory($id);

$page = isset($_GET['page']) ? $_GET['page'] : 1;

$products = getProductsByCategory($id, $page);

$total = countProductsByCategory($id);
$pages = ceil($total / config('per_page'));

view('category', [
    'category' => $category,
    'products' => $products,
    'pages' => $pages,
]);