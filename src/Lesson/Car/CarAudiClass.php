<?php

namespace Lesson\Car;

class CarAudiClass implements CarInterface        /*extends - наследование*/
{                                                                  /*implements - имплементация интерфейса(наследование)*/
    public function model()
    {
        $this->carName = 'Audi';
        return $this->carName;
    }

    public function speed()
    {
        return 80;
    }


}