<?php
spl_autoload_register(function ($class_name) {
    include $class_name . '.class.php';
});

//Создаем класс Млекопитающие
class Mammal extends Animal
{
    public static $count = 0; //для подсчета количества объектов
    public $height; //рост
    private $isHair; //есть ли шерсть
    private $hairColor; //цвет шерсти
    private $hairLength; //длина шерсти
    private $isLiveInWater; //живет в воде или нет
    public function __construct($name, $weight, $type, $food, $height, $isHair, $hairColor, $hairLength, $isLiveInWater = 0) {
        parent::__construct($name, $weight, $type, $food);
        $this->height = $height; //добавляем к родительскому конструктору рост
        $this->isHair = $isHair; //добавляем к родительскому конструктору есть ли шерсть
        $this->hairColor = $hairColor; //добавляем к родительскому конструктору цвет шерсти
        $this->hairLength = $hairLength; //добавляем к родительскому конструктору длину шерсти
        $this->isLiveInWater = $isLiveInWater; //добавляем к родительскому конструктору в воде ли живет
        self::$count++; //счетчик объектов
    }
    public function isHair(){
        if($this -> isHair == 1){
            echo 'У ' . $this -> type . $this->hairLength . ' шерсть длиной ' . $this->hairLength . '.' . '<br>';
        } else {
            echo $this -> type . ' не имеет шерсти.' . '<br>';
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