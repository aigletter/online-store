<?php

$categories = getItems("SELECT * FROM categories");

view('home', [
    'categories' => $categories
]);
