<?php

//Incomplete homework
//singleton

class animal
{
    private static $animal;

    private function __construct(){}

    public static function getInstance()
    {
        if (!isset(self::$animal)){
            self::$animal = new animal();
        }
        return self::$animal;
    }

}

$animal= animal::getInstance();//object(animal)#1 (0)
$animal2= animal::getInstance();//object(animal)#1 (0)
var_dump($animal,$animal2);


class lione
{

    public function hunt (animal $animal)
    {

    }

    public function move(animal $animal)
    {

    }

    public function parturition (animal $animal)
    {

    }

}


class snake
{

    public function hunt (animal $animal)
    {

    }

    public function move(animal $animal)
    {

    }

}


class monkey
{

    public function hunt (animal $animal)
    {

    }

    public function move(animal $animal)
    {

    }

    public function parturition (animal $animal)
    {

    }

}