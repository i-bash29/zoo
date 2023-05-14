<?php
spl_autoload_register(function ($class_name) {
    include $class_name . '.class.php';
});

//Создаем класс Рыба
class Fish extends Animal
{
    public $lenght; //длина
    public $type; //тип
    protected $isSoldWater; //в соленой или пресной воде обитает
    function __construct($name, $weight, $lenght, $type, $isSoldWater = 1) {
        parent::__construct($name, $weight);
        $this->lenght = $lenght;
        $this->type = $type;
        $this->isSoldWater = $isSoldWater;
    }
    public function isSoldWater(){
        if($this -> isSoldWater == 1){
            echo $this -> type . ' обитает в соленой морской воде' . '<br>';
        } else {
            echo $this -> type . ' обитает в пресной воде' . '<br>';
        }
    }
}