<?php
if ($_SERVER['REQUEST_METHOD']=="GET"){
    unset($_SESSION['user_data']);
    header('Location: /');
};