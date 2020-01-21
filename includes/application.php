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

function redirect($url) {
    header("Location: " . $url);
}

function filterInput($input){
    $input = trim($input);
    $input = stripslashes($input);
    $input = strip_tags($input);
    $input = htmlspecialchars($input);
     $input=mysqli_real_escape_string(getDbConnection(), $input);
    return $input;
}

function validateString($input, $min=2, $max=32){
    if (empty($input) || strlen($input) < $min || strlen($input) > $max) {
        return false ;
    }else{
        return true;
    }
};
function ifError($input_data){
    if (count($errors) < 0) {
        echo $input_data;
    };
    return $input_data;

}