<?php

function getCategory($id) {
    return getItem("SELECT * FROM categories WHERE id = " . $id);
}