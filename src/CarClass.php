<?php


class CarClass
{
    protected $carName;
    private $speed;

    public function model()
    {
        $this->carName = 'BMW';
        return $this->carName;
    }

    public function speed($minSpeed)
    {
        $this->speed = $minSpeed * 3;
        return $this->speed;
    }

    public function toString()
    {
        return $this->carName . ' has speed ' . $this->speed . 'km';
    }
}


/*

 public function toString()
{
    return $this->model() . ' has speed ' . $this->speed . 'km';
}

*/

/*области видимости свойств и методов класса:
public - виден всем
privat - виден только ВНУТРИ КЛАССА
protected - Защищен, можно передавать/переопределить чайлдам.*/