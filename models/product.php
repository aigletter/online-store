<?php

function getProductsByCategory($categoryId, $page=null, $perPage=null) {
    if (empty($page)) {
        $page = 1;
    }
    if (empty($perPage)) {
        $perPage = config('per_page');
    }
    $offset = $page > 1 ? $perPage * ($page - 1) : 0;

    return getItems("
        SELECT * FROM products WHERE category_id = " . $categoryId . " LIMIT $perPage OFFSET $offset
    ");
}

function countProductsByCategory($categoryId) {
    $result = getItem("
        SELECT COUNT(id) AS counter FROM products WHERE category_id = " . $categoryId . "
    ");
    return $result['counter'];
}

function getProduct($id) {
    return getItem("SELECT * FROM products WHERE id = " . $id);
}