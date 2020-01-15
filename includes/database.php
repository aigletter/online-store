<?php

function getDbConnection() {
    $link = mysqli_connect('localhost', 'root', '1q2w3e', 'shop');
    mysqli_set_charset($link, 'utf8');
    return $link;
}

function getItems($query) {
    $link = getDbConnection();
    $result = mysqli_query($link, $query);
    return mysqli_fetch_all($result, MYSQLI_ASSOC);
}