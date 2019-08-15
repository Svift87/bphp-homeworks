<?php
    error_reporting(E_ALL);

    include 'autoload.php';
    include 'config/SystemConfig.php';

    $jsonObj = new JsonFileAccessModel('users');
    $json = $jsonObj->readJson();
?>