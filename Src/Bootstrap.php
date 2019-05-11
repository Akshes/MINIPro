<?php

namespace  Akshes\db;
use Akshes\file\csvLoad;

class bootstrap
{
    public function create(String $filePath)
    {

        $records = csvLoad::returnArray($filePath);

        $records = csvLoad::returnArray($filePath);


        factory\recordFactory::create($record);

        print_r($object);
        echo table::tableTag('Shoes');

    }
}