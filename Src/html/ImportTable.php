<?php
function Import($class) {
    include $class . '.php';
}
spl_autoload_register('autoload');
$file = new File();
$array = $file::readCSVtoArray("../data/shoe.csv");
$obj = new CreateSQLTable();
$obj->createTaskTable($array[1],$array[0]);