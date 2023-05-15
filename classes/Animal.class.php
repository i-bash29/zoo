<?php
//создаем абстрактный класс животное
abstract class Animal
{
    public $name; //имя
    public $weight; //вес
    protected $type; //тип
    private $food; //чем питается

    public function __construct($name, $weight, $type, $food){
        $this->name = $name;
        $this->weight = $weight;
        $this->type = $type;
        $this->food = $food;
    }

    public function eat(){
        echo 'Корм для ' . $this -> type . ': ' . $this -> food . '<br>';
    }
}