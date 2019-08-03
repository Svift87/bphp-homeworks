<?php

function generate($rows, $placesPerRow, $avaliableCount) {
    if ($rows * $placesPerRow > $avaliableCount) {
        return false;
    }
    $map = [];
    for ($i = 0; $i < $rows; $i++) {
        for ($a = 0; $a < $placesPerRow; $a++) {
            $map[$i][$a] = false;
        }
    }
    return $map;
}

function reserve($map, $row, $place) {
    if ($map[$row-1][$place-1] === false) {
        $map[$row-1][$place-1] = true;
        return true;
    }
}

$chairs = 50;
$map = generate(5, 8, $chairs);
$requiredRow = 3;
$requiredPlace = 5;

$reverve = reserve($map, $requiredRow, $requiredPlace);
logReserve($requiredRow, $requiredPlace, $reverve);

$reverve = reserve($map, $requiredRow, $requiredPlace);
logReserve($requiredRow, $requiredPlace, $reverve);


function logReserve($row, $place, $result){
    if ($result) {
        echo "Ваше место забронировано! Ряд $row, место $place".PHP_EOL;
    } else {
        echo "Что-то пошло не так=( Бронь не удалась".PHP_EOL;
    }
}

?>