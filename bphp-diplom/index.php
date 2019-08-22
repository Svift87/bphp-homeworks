<?php

error_reporting(E_ALL);

$users = [
    'manager' => 'manager',             // Для менеджеров 
    'translator' => 'translator',       // Для переводчиков
];

function login($users) {    
    $login = isset($_POST['login']) ? $_POST['login'] : '';
    if (array_key_exists($login, $users)) {
        if ($_POST['login'] == 'manager' && $_POST['password'] == $users['manager']) {
            header('Location: /bphp-diplom/manager/manager.html');
            exit;
        } else if ($_POST['login'] == 'translator' && $_POST['password'] == $users['translator']) {
            header('Location: /bphp-diplom/translator/translator.html');
            exit;
        }
    }

    echo 'неверный пароль или логин!';
    return false;
}

login($users);
