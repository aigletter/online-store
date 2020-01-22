<?php

function getDbConnection() {
    global $app;
    if (empty($app['db_connection'])) {
        $config = config('db');
        $app['db_connection'] = mysqli_connect($config['host'], $config['user'], $config['password'], $config['database']);
        mysqli_set_charset($app['db_connection'], 'utf8');
    }

    return $app['db_connection'];
}

function getItems($query) {
    $link = getDbConnection();
    $result = mysqli_query($link, $query);
    if ($result) {
        return mysqli_fetch_all($result, MYSQLI_ASSOC);
    }

    return [];
}

function getItem($query) {
    $link = getDbConnection();
    $result = mysqli_query($link, $query);
    if ($result) {
        return mysqli_fetch_array($result, MYSQLI_ASSOC);
    }

    return null;
}

function query($query) {
    $link = getDbConnection();
    $result = mysqli_query($link, $query);
    return $result;
}