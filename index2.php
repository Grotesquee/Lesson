<?php

require_once 'vendor/autoload.php';



$asd = 3;
$bxc = 2;
echo $asd += $bxc;

echo '</br>';

$acd = 4;
$bnm = 6;
echo $acd += $bnm;
echo '</br>';
echo $acd = $acd + $bnm;











//
//for ($i = 0; $i < 5; ++$i) {
//    if ($i == 2) continue;
//    print $i;
//}






$obj = new Lesson\Car\CarAudiClass();
if ($obj instanceof \Lesson\Car\CarInterface) {
    var_dump($obj->model(), $obj->speed(12));
}

$obj2 = new \Lesson\Boat\BoatClass();
var_dump($obj2->model());

$obj3 = new Lesson\Car\CarVolvoClass();
if ($obj3 instanceof \Lesson\Car\CarInterface) {
    var_dump($obj3->model(), $obj3->speed(140));
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


//$obj3 = new Lesson\Car\CarVolvoClass();
//if ($obj3 instanceof \Lesson\Car\CarInterface) {
//    try {
//        var_dump($obj3->model(), $obj3->speed(140));
//    } catch (\Exception $err) {
//        echo $err->getMessage();
//    }
//
//}








/*Типы переменных: число, сртока, булев, массив, объект.*/

/*Три кита ООП: наследование, полиморфизм, инкапсуляция*/

//$i = 4;
//$j = 30;
//$k = 0;
//$k = $j++/$i++;
//echo $i . " " . $j . " " . $k . " ";
