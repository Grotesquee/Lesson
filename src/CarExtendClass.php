<?php

require_once 'CarClass.php';

class CarExtendClass extends CarClass /*extends - наследование*/
{
    public function model()
    {
        $this->carName = 'Audi';
        return $this->carName;
    }
}