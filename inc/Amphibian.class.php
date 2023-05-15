<?php
spl_autoload_register(function ($class_name) {
    include $class_name . '.class.php';
});

//Создаем класс Земноводные
class Amphibian extends Animal
{
    public static $count = 0; //для подсчета количества объектов
    public $length; //длина
    public $color; //цвет
    private $isTail; //есть ли хвост
    private $tailLength; //длина хвоста
    private $isLiveInWater; //живет в воде или нет
    public function __construct($name, $weight, $type, $food, $length, $color, $isTail, $tailLength, $isLiveInWater = 0) {
        parent::__construct($name, $weight, $type, $food);
        $this->length = $length; //добавляем к родительскому конструктору длину
        $this->color = $color; //добавляем к родительскому конструктору цвет
        $this->isTail = $isTail; //добавляем к родительскому конструктору есть ли хвост
        $this->tailLength = $tailLength; //добавляем к родительскому конструктору длину хвоста
        $this->isLiveInWater = $isLiveInWater; //добавляем к родительскому конструктору в воде ли живет
        self::$count++; //счетчик объектов
    }
    public function isTail(){
        if($this -> isTail == 1){
            echo 'У ' . $this -> type . ' хвост длиной ' . $this->tailLength . '.' . '<br>';
        } else {
            echo $this -> type . ' не имеет хвоста.' . '<br>';
        }
    }
    public function isLiveInWater(){
        if($this -> isLiveInWater == 1){
            echo $this -> type . ' обитает в воде.' . '<br>';
        } else {
            echo $this -> type . ' обитает на суше.' . '<br>';
        }
    }
}