<?php
spl_autoload_register(function($class_name){
    include $_SERVER['DOCUMENT_ROOT'] . '/' . $_SERVER['REQUEST_URI'] . '/classes/' . $class_name . '.php';
});
?>