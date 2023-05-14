<?php
spl_autoload_register(function ($class_name) {
    include $class_name . '.class.php';
});

abstract class fish implements IAnimal
{
    public $name;
    public $weight;
    public $color;
    abstract function speak();
    abstract function doing();
}