<?php
/**
 * Created by PhpStorm.
 * User: grotesque
 * Date: 23.12.15
 * Time: 19:21
 */

namespace Validator;


class ValidatorStringClass implements  ValidateInterface
{
    public function isValid($value)
    {
        return is_string($value);
    }

}