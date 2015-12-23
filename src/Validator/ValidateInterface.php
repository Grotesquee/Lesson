<?php
/**
 * Created by PhpStorm.
 * User: grotesque
 * Date: 23.12.15
 * Time: 19:18
 */

namespace Validator;


interface ValidateInterface
{
    public function isValid($value);
}