<?php
view('registration');
    if (isset($_POST['submit'])){
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
        $link=getDbConnection();
        mysqli_set_charset($link, 'utf8');
$data = getItem("SELECT login FROM users WHERE login='" . $user['login'] . "'");
       if(in_array($user['login'],$data) == true ){
           $errors['login_is_used'] = "Пользователь с таким логином уже существует";
       }
//Запись в базу
        if (count($errors) == 0) {
mysqli_query($link, "START TRANSACTION");

            $query = "INSERT INTO users (user_name, last_name, login, password ) VALUES("
                . "'" . $user['user_name'] . "', '" . $user['last_name'] . "', '" . $user['login'] . "', '" . $user['password'] . "')";
            $resultUser = mysqli_query($link, $query);

            if ($resultUser) {
                echo 'Пользователь успешно зарегистрирован!';
                mysqli_commit($link);
            } else {
                echo 'User insert error';
                mysqli_rollback($link);
            }
        }else {
            echo "Ошыбка при регистрации: ";
            foreach ($errors AS $error) {
                echo $error . '<br>';
            }

        }
    };







