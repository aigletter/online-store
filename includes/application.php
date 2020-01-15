<?php

include 'render.php';
include 'database.php';

include 'models/category.php';
include 'models/product.php';

function run($config) {
    global $app;
    $app['config'] = $config;

    $controllerFile = route();

    include $controllerFile;
}

function route() {
    $url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

    $path = explode('/', $url);

    $controller = $url != '/' ? $path[1] : 'home';
    $controllerFile = $_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'controllers' . DIRECTORY_SEPARATOR
        . $controller . '.php';

    if (!file_exists($controllerFile)) {
        $controllerFile = $_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'controllers' . DIRECTORY_SEPARATOR
            . '404.php';
    }

    return $controllerFile;
}

function config($name) {
    global $app;
    if (array_key_exists($name, $app['config'])) {
        return $app['config'][$name];
    }

    return null;
}