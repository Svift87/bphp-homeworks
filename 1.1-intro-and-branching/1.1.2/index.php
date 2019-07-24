<?php
date("H");
date("N");



$pnSr = '09.00';
$chSb = '10.00';
$vs = 'выходной';
$doWork = '18.00';


$tooday = 'Это лучший день, чтобы обратиться в Horns&Hooves! Мы работаем для Вас до ';
$todayNight = 'Сегодня - лучший день, чтобы обратиться в Horns&Hooves! Мы работаем для Вас с ';
$tomorrow = 'Завтра - лучший день, чтобы обратиться в Horns&Hooves! Мы работаем для Вас с ';
$afterTomorrow = 'Послезавтра - лучший день, чтобы обратиться в Horns&Hooves! Мы работаем для Вас с ';


$morningGood = 'Доброе утро!';
$dayGood = 'Добрый день!';
$eveninGood = 'Добрый вечер!';
$nightsGood = 'Доброй ночи!';


$morningGoodImg = 'https://cdn.pixabay.com/photo/2019/07/12/20/56/zumba-4333580_960_720.jpg';
$dayGoodImg = 'https://cdn.pixabay.com/photo/2019/07/17/09/49/susten-4343542_960_720.jpg';
$eveninGoodImg = 'https://cdn.pixabay.com/photo/2019/07/19/03/30/landscape-4347888_960_720.jpg';
$nightsGoodImg = 'https://cdn.pixabay.com/photo/2019/07/12/08/04/shadow-4332215_960_720.jpg';

if (date("N") == 1) {
    $day = 'понедельник';
} elseif (date("N") == 2) {
    $day = 'вторник';
} elseif (date("N") == 3) {
    $day = 'среда';
} elseif (date("N") == 4) {
    $day = 'четверг';
} elseif (date("N") == 5) {
    $day = 'пятница';
} elseif (date("N") == 6) {
    $day = 'суббота';
} elseif (date("N") == 7) {
    $day = 'воскресенье';
};

if (date("H") >= 06 && date("H") <= 10) {
    $time = $morningGood;
    $bacimag = $morningGoodImg;
} else if (date("H") >= 11 && date("H") <= 17) {
    $time = $dayGood;
    $bacimag = $dayGoodImg;
} else if (date("H") >= 18 && date("H") <= 22) {
    $time = $eveninGood;
    $bacimag = $eveninGoodImg;
} else if (date("H") >= 00 && date("H") <= 5 && date("H") == 23) {
    $time = $nightsGood;
    $bacimag = $nightsGoodImg;
}


// Подскажите где ошибка?

// if (date("H") >= 11 && date("H") <= 17 && date("N") >= 1 && date("N") <= 6) {
//     $timeWork = $tooday + $doWork;
// } else if (date("H") >= 18 && date("H") <= 23 && date("N") >= 1 && date("N") <= 3) {
//     $timeWork = $tomorrow + $pnSr;
// } else if (date("H") >= 00 && date("H") <= 08 && date("N") >= 1 && date("N") <= 4) {
//     $timeWork = $todayNight + $pnSr;
// } else if (date("H") >= 18 && date("H") <= 23 && date("N") >= 4 && date("N") <= 5) {
//     $timeWork = $tomorrow + $chSb;
// } else if (date("H") >= 00 && date("H") <= 08 && date("N") >= 4 && date("N") <= 6) {
//     $timeWork = $todayNight + $chSb;
// } else if (date("H") >= 18 && date("H") <= 23 && date("N") == 6 ) {
//     $timeWork = $afterTomorrow + $pnSr;
// } else if (date("H") >= 00 && date("H") <= 23 && date("N") == 7) {
//     $timeWork = $tomorrow + $pnSr;
// }  


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>bPHP - 1.1.2</title>
</head>
<body style='background-image: url(<?=$bacimag?>)'>
    <div class="content">
        <h2><?=$time?></h2>
        <hr>
        <p>Сегодня <?=$day?></p>
        <p><br></p>
        <p><?=$timeWork?></p>
    </div>
</body>
</html>