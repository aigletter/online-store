<?php

function getCommentsByProductId($productId) {
    return getItems("SELECT * FROM comments WHERE product_id = " . $productId);
}