<?php
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

$currentTime = time();

$timeFromCookies = $_COOKIE["date"];

if ($currentTime - $timeFromCookies < 5) {
    $date = date('d.m.Y H:i:s');
    $file = fopen("${login}", 'a');
    fwrite($file, "${date} : ${$ip} \n");
    fclose($file);
    echo "Слишком часто вводите пароль. Попробуйте еще раз через минуту";
    return false;
} else {
    setcookie("date", time());
    setcookie("ip", $ip);
    $_SESSION["date"] = time();
    $_SESSION["ip"] = $ip;
    echo "Неверные данные";
    return false;
}