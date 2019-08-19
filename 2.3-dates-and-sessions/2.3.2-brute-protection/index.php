<?php
error_reporting(E_ALL);
$users = [
    'admin' => 'admin1234',
    'randomUser' => 'somePassword',
    'janitor' => 'nimbus2000'
];
function login($users) {
    
    $login = isset($_POST['login']) ? $_POST['login'] : '';
    
     if (array_key_exists($login, $users)) {
        if ($users[$_POST['login']] == $_POST['password']) {
            echo 'Вы успешно вошли в систему!';
            return true;
        }
    }
    echo 'неверный пароль или логин!';
    return false;
}
function check($users) {
    if (login($users) === true) {
        exit;
    } else {
        $_SESSION['login'] = (isset($_POST['login']));
        $_SESSION['time'] = time();
        $_SESSION['counter'] = 1;
        return;
    }
}
function logFile() {
        $file = 'data.txt';
        $userFile = fopen($file, 'a');
        $date = (isset($_POST['login'])) . ': ' . date('d.m.Y H:i:s') . "\n";
        fwrite($userFile, $date);
        fclose($userFile); 
}
function usersAttempts($users) {
    session_set_cookie_params(1800);
    session_start();
 
    if (count($_SESSION) == 0) {
        check($users);
        return;
    }
 
    if ($_SESSION['login'] === (isset($_POST['login']))) {
        
        $_SESSION['counter']++;
        
        if (((time() - $_SESSION['time']) <= 5) && ($_SESSION['counter'] === 2)) {
            
            echo 'слишком много попыток, попробуйте еще раз спустя одну минуту!';
            logFile();
            
        } elseif ((time() - $_SESSION['time']) < 60) {
            $_SESSION['counter']++;
            if ($_SESSION['counter'] > 3) {
                $_SESSION['counter'] = 0;
                echo 'слишком много попыток, попробуйте еще раз спустя одну минуту!';
                logFile();
            } else {
                echo 'неверный пароль или логин!';
                return false;
            }
 
        } elseif ((time() - $_SESSION['time']) > 60) {
            $_SESSION = [];
            check($users);
            return;
        }
 
    } else {
        check($users);
        return;
    }
}
 
usersAttempts($users);