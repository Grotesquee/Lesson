<?php

/* require(постоянно), require_once(один раз), include, include_once - присоединяют файл*/

require_once 'src/validate.php';
require_once 'public/view_login.php';

//Вынести валидацию логина в отдельную функцию, переместить в файл validate.php и добавить проверку на пустоту

enter();


/* Connect to an ODBC database using driver invocation */
$dsn = 'mysql:dbname=test;host=127.0.0.1';
$user = 'root';
$password = 'Ltpjrcj11';

try {
    $dbh = new PDO($dsn, $user, $password);
    echo 'Connection succes';
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}

if (isset($_REQUEST['login']) && !empty($_REQUEST['login']) && isset($_REQUEST['password']) && !empty($_REQUEST['password'])) {
    $result = $dbh->query('SELECT id FROM test.users WHERE login="' . $_REQUEST['login'] . '" AND password="' . $_REQUEST['password'] . '"');
    foreach ($result as $row) {
        if (!empty($row)){
            enter();
            echo 'you loggined';
        }
    }
}
enter();

var_dump($_REQUEST);

/*Вынести код $dns user password и try в функцию - весь код в validate и переименовать в functions.php*/



