<?php
error_reporting(E_ALL);

$users = [
    'admin' => 'admin1234',
    'randomUser' => 'somePassword',
    'janitor' => 'nimbus2000'
];
$login = $_POST["login"];
$pass = $_POST["password"];
$ip = '192.168.1.0';

foreach ($users as $key => $value) {
    if ($key === $login && $pass === $value) {
        echo "Вы вошли";
        return true;
    }
}

setcookie("date", time());

$_SESSION["date"] = time();

$date = date('d.m.Y H:i:s');
$file = fopen("${login}", 'a');

$currentTime = time();

$timeFromCookies = $_COOKIE["date"];


if ($currentTime - $timeFromCookies < 5) {    
    fwrite($file, "${date} : ${$ip} \n");
    fclose($file);
    echo "Слишком часто вводите пароль. Попробуйте еще раз через минуту";
    return false;
} else {
    setcookie("ip", $ip);
    $_SESSION["ip"] = $ip;
    echo "Неверные данные";
    return false;
}