<?php
if (isset($_POST['submit'])) {
    $user = [
        'user_name' => filterInput($_POST['user_name']),
        'last_name' => filterInput($_POST['last_name']),
        'login' => filterInput($_POST['login']),
        'password' => filterInput($_POST['password']),
        'confirm_password' => filterInput($_POST['confirm_password'])
    ];

    //Проверка данных
    $errors = [];
    if (validateString($user['user_name']) == false) {
        $errors['name'] = "Имя должно быть не мение 2 символов и не больше 32";
    } elseif (validateString($user['last_name']) == false) {
        $errors['last_name'] = "Фамилия должна быть не мение 2 символов и не больше 32";
    } elseif (validateString($user['login']) == false) {
        $errors['login'] = "Логин должен быть не мение 2 символов и не больше 32";
    } elseif (validateString($user['password']) == false) {
        $errors['password'] = "Пароль должен быть не мение 2 символов и не больше 32";
    } elseif (!preg_match("/^[a-zA-Z0-9]+$/", $user['password'])) {
        $errors['password_pattern'] = "Пароль должен содержать только буквы латинского алфавита и цифры ";
    } elseif ($user['password'] != $user['confirm_password']) {
        $errors['password_not_match'] = "Пароли не совпадают";
    };

    //Проверка не занят ли логин
    if (!checkUser($user['login'])) {
        $errors['login_is_used'] = "Пользователь с таким логином уже существует";
    }

    //Запись в базу
    if (count($errors) == 0) {
        $resultUser = registerUser($user['user_name'], $user['last_name'], $user['login'], $user['password']);
        if ($resultUser) {
            redirect('/');
            //echo 'Пользователь успешно зарегистрирован!';
        } else {
            echo 'User insert error';
        }
    } else {
        echo "Ошибка при регистрации: ";
        foreach ($errors AS $error) {
            echo $error . '<br>';
        }

    }
};

view('registration', [
    'errors' => $errors
]);







