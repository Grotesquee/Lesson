<?php
require_once 'vendor/autoload.php';
use Validator\ValidatorStringClass;
use Validator\ValidatorIntClass;
use Validator\ValidateManager;

//$validator = new ValidatorStringClass();
//$result = $validator->isValid('string');
//var_dump($result); //true
//$result = $validator->isValid(2);
//var_dump($result); //false
//
//$validator = new ValidatorIntClass();
//$result = $validator->isValid('string');
//var_dump($result); //true
//$result = $validator->isValid(2);
//var_dump($result); //false




$manager = new ValidateManager();
$manager->setValidators(new ValidatorStringClass());
$manager->setValidators(new ValidatorIntClass());
var_dump($manager->isValid('string'));
