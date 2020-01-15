<?php

function getProductsByCategory($categoryId) {
    return getItems("SELECT * FROM products WHERE category_id = " . $categoryId);
}

function getProduct($id) {
    return getItem("SELECT * FROM products WHERE id = " . $id);
}