<?php
spl_autoload_register(function ($class_name) {
    include $class_name . '.class.php';
});

$title = 'Зоопарк'; //название

//создаем рыб
$goldFish = new Fish('Gold Fish', '0.3 кг', 'Золотая рыбка', 'насекомые', '0.4 м');
$som = new Fish('Som', '8 кг', 'Сом', 'всеядный', '4 м', 0);

//создаем млекопитающих
$firstMonkey = new Mammal('Caesar', '60 кг', 'Шимпанзе', 'фрукты', '1,4 м', 1, 'коричневый', '1 см');
$secondMonkey = new Mammal('Koba', '3 кг', 'Капуцин', 'фрукты', '55 см', 1, 'черный', '1 см');
$lion = new Mammal('Simba', '200 кг', 'Лев', 'мясо', '1,5 м', 1, 'золотисто-коричневый', '1 см');
$dolphin = new Mammal('Winter', '200 кг', 'Дельфин', 'рыба', '-', 0, '-', '-', 1);

//создаем птиц
$owl = new Bird('Owl', '2 кг', 'Сова', 'мясо', '1,5 м', 'серый');
$parrot = new Bird('Parrot', '400 г', 'Попугай', 'фрукты', '65 см', 'красный');

//создаем земноводных (амфибий)
$triton = new Amphibian('Triton', '14 г', 'Тритон', 'личинки насекомых', '7 см', 'коричнево-бурый', 1, '4 см');
$frog = new Amphibian('Frog', '500 г', 'Лягушка', 'насекомые', '20 см', 'зеленый', 0, '-');
$salamander = new Amphibian('Salamander', '30 кг', 'Саламандра', 'насекомые', '1.2 м', 'коричнево-бурый', 1, '40 см', 1);

//создаем пресмыкающихся
$turtle = new Reptile('Turtle', '300 кг', 'Слоновая черепаха', 'растения', '1.4 м', 'зелено-коричневый', 1, '10 см');
$crocodile = new Reptile('Crocodile', '200 кг', 'Крокодил', 'мясо', '4 м', 'зеленый', 1, '1 м', 1);

//посчитаем животных
$animalsCount = Fish::$count + Mammal::$count + Bird::$count + Amphibian::$count + Reptile::$count;

//списки животных
$mammals = ['$firstMonkey', '$secondMonkey', '$lion', '$dolphin'];