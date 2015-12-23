<?php
/**
 * Created by PhpStorm.
 * User: grotesque
 * Date: 23.12.15
 * Time: 19:20
 */

namespace Validator;


class ValidatorIntClass implements ValidateInterface
{
    public function isValid($value)
    {
        return is_int($value);
    }

}