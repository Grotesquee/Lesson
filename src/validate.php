<?php
function validatePassword($password)
{
    $passwordError = '';
    if (strlen($password) < 6 ) {
        $passwordError = '<div class="alert alert-danger" role="alert">Вы ввели менее 6 символов</div>';
    }
    if (strlen($password) == 0) {
        $passwordError = '<div class="alert alert-danger" role="alert">Введите пароль!!!</div>';
    }
    return $passwordError;
}

function validateLogin($login)
{
    $loginError = '';
    if (strlen($login) < 2 || strlen($login) > 10) {
        $loginError = '<div class="alert alert-danger" role="alert">Не то, все не то!!</div>';
    }
    if (strlen($login) == 0) {
        $loginError = '<div class="alert alert-danger" role="alert">Введите логин!!</div>';
    }
    return $loginError;
}

function enter()
{
    echo '</br></br></br>';
}