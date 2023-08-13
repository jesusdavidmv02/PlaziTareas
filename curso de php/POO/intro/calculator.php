<?php

/**
 * Summary of calculator
 */
class calculator
{
    /**
     * Summary of type
     * @var
     */
    public $type;

    /**
     */
    public function __construct() {
    }
}
class sum
{
    public function add($intA, $intB)
    {
        echo $intA + $intB;
    }
}

$operation =  new calculator();
$operation->type = new sum();
$operation->type->add(5 ,10);
