<?php
//создаем абстрактный класс животное
abstract class Animal
{
    public $name; //имя
    public $weight; //вес

    public function __construct($name, $weight){
        $this->name = $name;
        $this->weight = $weight;
    }
}