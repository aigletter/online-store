<?php

// TODO фильтровать
$id = $_GET['id'];
$product = getProduct($id);
$category = getCategory($product['category_id']);
$comments = getCommentsByProductId($id);

view('product', [
    'product' => $product,
    'category' => $category,
    'comments' => $comments
]);