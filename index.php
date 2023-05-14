<?php
spl_autoload_register(function ($class_name) {
    include 'classes/' . $class_name . '.class.php';
});

$goldFish = new Fish('Gold Fish', '0.3 kg', '0.4 m', 'Золотая рыбка');
$som = new Fish('Som', '8 kg', '4 m', 'Сом', 0);
$som -> isSoldWater();
$goldFish -> isSoldWater();