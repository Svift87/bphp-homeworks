<?php
function generate($rows, $placesPerRow, $avaliableCount) {
    if ($rows * $placesPerRow  > $avaliableCount) {
        $result = false;
    } else {
        $result = array(array());
        for ($i = 0; $i <= $rows-1; $i++) {
            for ($j = 0; $j <= $placesPerRow-1; $j++) {
                $result[$i][$j] = false;
            }
        }
    }    
    return $result;
}

function reserve(&$map, $row, $place) {  
    if ($map[$row-1][$place-1] == false) {
        $map[$row-1][$place-1] = true;
        $result = true;
    } else {
        $result = false;
    }    
    return $result;
}   

$chairs = 50;
$map = generate(5, 8, $chairs);
$requireRow = 3;
$requirePlace = 5;

$reverve = reserve($map, $requireRow, $requirePlace);
logReserve($requireRow, $requirePlace, $reverve);

$reverve = reserve($map, $requireRow, $requirePlace);
logReserve($requireRow, $requirePlace, $reverve);

function logReserve($row, $place, $result) {
    if ($result) {
        echo "Ваше место забронировано! Ряд $row, место $place".PHP_EOL;
    } else {
        echo "Что-то пошло не так=( Бронь не удалась".PHP_EOL;
    }
}