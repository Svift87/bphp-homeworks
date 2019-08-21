<?php

error_reporting(E_ALL);

$users = [
    'manager' => 'manager',             // Для менеджеров 
    'translator' => 'translator',       // Для переводчиков
];

function login($users) {    
    $login = isset($_POST['login']) ? $_POST['login'] : '';
    if (array_key_exists($login, $users)) {
        if ($_POST['login'] == $users['manager'] && $_POST['password'] == $users['manager']) {
            echo 'ok manager!';
            // header('Location: http://www.example.com/manager.html');
            // exit;
            return true;
        } else if ($_POST['login'] == $users['translator'] && $_POST['password'] == $users['translator']) {
            echo 'ok translator!';
            // header('Location: http://www.example.com/translator.html');
            // exit;
            return true;
        }
    }

    echo 'неверный пароль или логин!';
    return false;
}