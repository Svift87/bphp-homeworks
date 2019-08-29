<?php
function enterToSystem () {
    include 'ArrayJson.php';
    $jsonArray = JsonToArray();
    if ($_POST['login'] == $jsonArray['admin']['name']) {
        header('Location: manager/manager.html');
    } elseif ($_POST['login'] !== $jsonArray['admin']['name'])  {
        if ($_POST['login'] == $jsonArray['translators']['name'] ) {
            header('Location: translators/translators.html');        
        } else {
            echo 'Неверный логин или пароль';
        }
    }
}
enterToSystem ();