<?php

/* require(постоянно), require_once(один раз), include, include_once - присоединяют файл*/

require_once 'src/validate.php';
require_once 'public/view.php';

//Вынести валидацию логина в отдельную функцию, переместить в файл validate.php и добавить проверку на пустоту



enter();



echo 'Ваш логин: '.$_REQUEST['login'];
enter();

echo 'Ваш пароль: '.$_REQUEST['password'];
enter();




var_dump($_REQUEST);





