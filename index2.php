<?php
require_once 'vendor/autoload.php';

$obj = new Lesson\Car\CarAudiClass();
if ($obj instanceof \Lesson\Car\CarInterface) {
    var_dump($obj->model(), $obj->speed());
}

$obj2 = new \Lesson\Boat\BoatClass();
var_dump($obj2->model());

$obj3 = new Lesson\Car\CarVolvoClass();
if ($obj3 instanceof \Lesson\Car\CarInterface) {
    var_dump($obj3->model(), $obj3->speed());
}




/*в папке \src создать новый namespace, подключить его в composer.json, назвать его Validator.
создать ValidateIterface, в нем создать публичный метод isValid($value) (после проверки метод должен вернуть true or false )
 и создать 2 класса, имплементирующие интерфейс ValidatorIntClass, ValidatorStringClass


ValidatorIntClass должен проверять, что $value является числом
ValidatorStringClass должен проверять, что $value является строкой

index.
$validator = new ValidateStringClass();
$result = $validator->isValid('string');
var_dump($result); //true
$result = $validator->isValid(2);
var_dump($result); //false



*/











/*Типы переменных: число, сртока, булев, массив, объект.*/

/*Три кита ООП: наследование, полиморфизм, инкапсуляция*/