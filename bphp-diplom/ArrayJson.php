<?php
function JsonToArray() {
    $fileName = 'password/allUser.json';

    $handle = fopen($fileName, 'r');
    $fileSize = filesize($fileName);
    $content = fread($handle, $fileSize);
    fclose($handle);


    $array = json_decode($content, true);
    return $array;
}