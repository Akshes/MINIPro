<?php
/**
 * Created by PhpStorm.
 * User: sohakolia
 * Date: 4/11/19
 * Time: 12:11 PM
 */
namespace  Akshes\models;

class record
{
    public function __construct(Array $data)
    {
        foreach ($data as $key => $value) {
            $this->{$key} = $value;
        }
    }

    function getData(): array
    {
        return $this->data;
    }
}
