<?php

require_once 'validate.php';
require_once '../public/view_reg.php';

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
    $dbh->exec('INSERT INTO users (login, password) VALUES("' . $_REQUEST['login'] . '","' . $_REQUEST['password'] . '")');
    enter();
    echo 'data added!';
}

