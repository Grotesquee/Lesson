<?php

namespace Lesson\Car;


class CarVolvoClass implements CarInterface
{
    public function model()
    {
        return 'Volvo';
    }

    public function speed($speed)
    {
        if ($speed > 120) {
            throw new \Exception('Вы превысили скорость ');
        }
        return 'Все гуд';
    }
}

/* Каким образом в PHP выбрасывать исключения?
throw Exception('Houston, we have a problem!');
raise Exception('Houston, we have a problem!');
alert 'Houston, we have a problem!';
call 'Houston, we have a problem!';
throw new Exception('Houston, we have a problem!'); */
