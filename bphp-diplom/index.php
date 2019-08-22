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
            echo 'ok manager!';
            // header('Location: /manager/manager.html');
            // exit;
            return true;
        } else if ($_POST['login'] == 'translator' && $_POST['password'] == $users['translator']) {
            echo 'ok translator!';
            // header('Location: /translator/translator.html');
            // exit;
            return true;
        }
    }

    echo 'неверный пароль или логин!';
    return false;
}

login($users);