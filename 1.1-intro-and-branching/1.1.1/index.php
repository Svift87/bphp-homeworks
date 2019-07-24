<?php
$variable = 3.14;
//  Ваш программный код, в котором переменной $type
//  присваивается одно из значений: bool, float, 
//  int, string, null или other

if (is_bool($variable)) {
    $text = bool;
    $description = 'Число с плавующей точкой';
} elseif (is_float($variable)) {
    $text = float;
    $description = 'Проверяет, является ли переменная числом с плавающей точкой';
} elseif (is_int($variable)) {
    $text = int;
    $description = 'Проверяет, является ли переменная целым числом';
} elseif (is_string($variable)) {
    $text = string;
    $description = 'Проверяет, является ли переменная строкой';
} elseif (is_null($variable)) {
    $text = null;
    $description = 'Проверяет, является ли значение переменной равным NULL';
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>bPHP - 1.1.1</title>
</head>
<body>
    <p><?=$variable?> is <?=$text?></p>
    <hr>
    <p><?=$description?></p>
</body>
</html>