<?php
spl_autoload_register(function ($class_name) {
    include $class_name . '.class.php';
});

//Создаем класс Рыба
class Fish extends Animal
{
    public static $count = 0; //для подсчета количества объектов
    public $length; //длина
    private $isSoldWater; //в соленой или пресной воде обитает
    public function __construct($name, $weight, $type, $food, $length, $isSoldWater = 1) {
        parent::__construct($name, $weight, $type, $food);
        $this->length = $length; //добавляем к родительскому конструктору длину
        $this->isSoldWater = $isSoldWater; //добавляем к родительскому конструктору в какой воде обитает
        self::$count++; //счетчик объектов
    }
    public function isSoldWater(){
        if($this -> isSoldWater == 1){
            echo $this -> type . ' обитает в соленой морской воде' . '<br>';
        } else {
            echo $this -> type . ' обитает в пресной воде' . '<br>';
        }
    }
}