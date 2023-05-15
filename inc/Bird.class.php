<?php
spl_autoload_register(function ($class_name) {
    include $class_name . '.class.php';
});

//Создаем класс Птица
class Bird extends Animal
{
    public static $count = 0; //для подсчета количества объектов
    public $wingspan; //размах крыльев
    public $color; //цвет
    public function __construct($name, $weight, $type, $food, $wingspan, $color) {
        parent::__construct($name, $weight, $type, $food);
        $this->wingspan = $wingspan; //добавляем к родительскому конструктору размах крыльев
        $this->color = $color; //добавляем к родительскому конструктору цвет
        self::$count++; //счетчик объектов
    }
}