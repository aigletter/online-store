<?php

function registerUser($firstName, $lastName, $login, $password) {
    $query = "INSERT INTO users (user_name, last_name, login, password ) VALUES("
        . "'" . $firstName . "', '" . $lastName. "', '" . $login . "', '" . $password . "')";
    return query($query);
}

function checkUser($login) {
    $data = getItem("SELECT login FROM users WHERE login='" . $login . "'");
    if (in_array($login, $data) == true) {
        return false;
    }

    return true;
}
