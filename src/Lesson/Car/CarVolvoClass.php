<?php

namespace Lesson\Car;


class CarVolvoClass implements CarInterface
{
    public function model()
    {
        return 'Volvo';
    }

    public function speed()
    {
        return 120;
    }
}