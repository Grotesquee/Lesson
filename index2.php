<?php
require_once 'vendor/autoload.php';

$obj = new Lesson\Car\CarAudiClass();
var_dump($obj->model(), $obj->speed());

$obj3 = new Lesson\Car\CarVolvoClass();
var_dump($obj3->model(), $obj3->speed());

$obj2 = new \Lesson\Boat\BoatClass();
var_dump($obj2->model());


















/*Типы переменных: число, сртока, булев, массив, объект.*/

/*Три кита ООП: наследование, полиморфизм, инкапсуляция*/