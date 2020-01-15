<?php

$categories = getItems("SELECT * FROM categories");

print_r($categories);

view('home');