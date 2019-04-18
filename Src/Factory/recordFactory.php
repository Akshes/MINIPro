<?php
/**
 * Created by PhpStorm.
 * User: sanja
 * Date: 4/17/2019
 * Time: 4:20 PM
 */

namespace Akshes\Factory;
use Akshes\models\record;



class recordFactory
{
    public static function create(Array $data) {
        return new record($data);
    }
}

