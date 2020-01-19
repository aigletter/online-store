<?php

//ini_set('display_errors', 1);

include 'includes' . DIRECTORY_SEPARATOR . 'application.php';

$config = include 'config/main.php';

run($config);