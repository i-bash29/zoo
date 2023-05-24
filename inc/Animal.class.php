<?php
//создаем абстрактный класс животное
abstract class Animal
{
    public static $count = 0; //для подсчета количества объектов
    public $name; //имя
    public $weight; //вес
    protected $type; //тип
    private $food; //чем питается

    public function __construct($name, $weight, $type, $food){
        $this->name = $name;
        $this->weight = $weight;
        $this->type = $type;
        $this->food = $food;
        self::$count++; //счетчик объектов
    }

    public function eat(){
        echo 'Корм для ' . $this -> type . ': ' . $this -> food . '.' . '<br>';
    }
}