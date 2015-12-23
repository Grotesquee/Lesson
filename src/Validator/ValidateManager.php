<?php
/**
 * Created by PhpStorm.
 * User: grotesque
 * Date: 23.12.15
 * Time: 19:37
 */

namespace Validator;


class ValidateManager
{
    protected $validators;

    /**
     * @return mixed
     */
    public function getValidators()
    {
        return $this->validators;
    }

    /**
     * @param mixed $validators
     */
    public function setValidators($validators)
    {
        $this->validators[] = $validators;
    }

    public function isValid($value)
    {
        $response = [];
        foreach ($this->validators as $validator) {
            $response[] = $validator->isValid($value);
        }
        return $response;
    }
}