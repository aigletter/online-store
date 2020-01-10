<?php

include 'render.php';

function runApplication() {
    $url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

    $path = explode('/', $url);

    $controller = $url != '/' ? $path[1] : 'home';
    $controllerFile = $_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'controllers' . DIRECTORY_SEPARATOR
        . $controller . '.php';

    if (!file_exists($controllerFile)) {
        $controllerFile = $_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'controllers' . DIRECTORY_SEPARATOR
            . '404.php';
    }

    include $controllerFile;
}