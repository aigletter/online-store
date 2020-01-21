<?php
function filterInput($var)
{
    return htmlspecialchars(strip_tags(stripslashes(trim($var))));
}

function validateCategory($var)
{
    if ( $var != 'not') {
        return true;
    }
    return false;
}

function validatePoductname($var)
{
    if (preg_match('/^[А-Яа-яA-Za-z0-9\s\.,-:\(\)]{3,120}$/u', $var)) {
        return true;
    }
    return false;
}

function validateSpecification($var)
{
    if (preg_match('/^[А-Яа-яA-Za-z0-9\s\.,-:\(\)]{5,300}$/u', $var)) {
        return true;
    }
    return false;
}

function validatePrise($var)
{
    if (preg_match('/^[0-9]{1,6}$/u', $var)) {
        return true;
    }
    return false;
}


function uploadFile()
{
    if (!empty($_FILES["avatar"])) {
        if ($_FILES['avatar']['error'] != 0) {
            switch ($_FILES['avatar']['error']) {
                case UPLOAD_ERR_INI_SIZE:
                case UPLOAD_ERR_FORM_SIZE:
                    echo 'Файл превышает допустимый размер';
                    break;
                case UPLOAD_ERR_PARTIAL:
                    echo 'Загружаемый файл был получен не полностью';
                    break;
                case UPLOAD_ERR_CANT_WRITE:
                    echo 'Не удалось записать файл на диск';
                    break;
            }
        } else {
            $whitelist = ['image/jpeg', 'image/gif', 'image/png'];
            $imagesize = getimagesize($_FILES['avatar']['tmp_name']);
            $blacklist = ['.php', '.phtml', '.php3', '.php4'];
            foreach ($blacklist as $ext)
                if (!in_array($_FILES['avatar']['type'], $whitelist)) {
                    exit('Недопустимый тип файла');
                } elseif (!in_array($imagesize['mime'], $whitelist)) {
                    exit('Недопустимый тип файла');
                } elseif (strpos($_FILES['avatar']['name'], $ext) !== false) {
                    exit ('Недопустимое расширение файла');
                } else {
                    $fileName = $_SERVER["DOCUMENT_ROOT"] . "/uploads/" . $_FILES["avatar"]["name"];
                    if (move_uploaded_file($_FILES["avatar"]["tmp_name"], $fileName)) {

return true;
                    }

                }
        }
    }
}