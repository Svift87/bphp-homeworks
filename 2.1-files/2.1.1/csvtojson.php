<?php
$file = fopen('data.csv', 'r');
$firstLine = fgetcsv($file, 1000, ';');
$name = $firstLine[0];
$art = $firstLine[1];
$price = $firstLine[2];
$json = [];

while ($str = fgetcsv($file, 1000, ';')) {

    $current_encoding0 = mb_detect_encoding($str[0]);
    $current_encoding1 = mb_detect_encoding($str[1]);
    $current_encoding2 = mb_detect_encoding($str[2]);

    echo $current_encoding0;
    echo $current_encoding1;
    echo $current_encoding2;

    $json[] = [
        $name => iconv($current_encoding0, "UTF-8", $str[0]),
        $art => iconv($current_encoding1, "UTF-8", $str[1]),
        $price => iconv($current_encoding2, "UTF-8", $str[2]),
    ];
}


fclose($file);

file_put_contents('data.json', json_encode($json));