<?php
/**
 * Created by PhpStorm.
 * User: sanja
 * Date: 4/17/2019
 * Time: 4:24 PM
 */

namespace Akshes\file;


class csvLoad
{
    public static function returnArray(String $filePath) :array
    {
        $file = fopen($filePath,"r");
        $records = array();

}