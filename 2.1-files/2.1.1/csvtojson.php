<?php
$file = fopen('data.csv', 'r');
$firstLine = fgetcsv($file, 1000, ';');
$name = $firstLine[0];
$art = $firstLine[1];
$price = $firstLine[2];
$json = [];

while ($str = fgetcsv($file, 1000, ';')) {
    $json[] = [
        $name => iconv("ASCII", "UTF-8", $str[0]),
        $art => iconv("ASCII", "UTF-8",$str[1]),
        $price => iconv("ASCII", "UTF-8",$str[2]),
    ];
}


fclose($file);

file_put_contents('data.json', json_encode($json));