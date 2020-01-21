<?php

//ini_set('display_errors', 1);

include 'includes' . DIRECTORY_SEPARATOR . 'application.php';

$config = include 'config/main.php';

//TODO добавить функцию проверки прав администратора
$config['menu'][] = [
    'url' => '/admin',
    'title' => 'Администрирование',
];

run($config);