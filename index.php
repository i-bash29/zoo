<?php
global $firstMonkey, $secondMonkey, $lion, $dolphin, $owl, $parrot, $turtle, $triton, $crocodile, $title, $frog, $salamander, $goldFish, $som;
include 'inc/zoo.php';
?>
<!DOCTYPE html>
<html lang="ru">
	<head>
		<title><?= $title?></title>
		<meta charset="utf-8" />
		<link rel="stylesheet" type="text/css" href="inc/style.css" />
	</head>
	<body>
        <h1> Зоопарк</h1>
        <p>Зоопарк содержит <?=Animal::$count ?> животных:</p>
        <ul>
            <li>Млекопитающие: <?=Mammal::$count ?></li>
            <li>Птицы: <?=Bird::$count ?></li>
            <li>Пресмыкающиеся: <?=Reptile::$count ?></li>
            <li>Земноводные: <?=Amphibian::$count ?></li>
            <li>Рыбы: <?=Fish::$count ?></li>
        </ul>
        <?php
        //делаем таблицу с млекопитающими
        $firstMonkey -> drawTable();
        $secondMonkey -> drawTable();
        $lion -> drawTable();
        $dolphin -> drawTable();
        echo '<br>';

        //делаем таблицу с птицами
        $owl -> drawTable();
        $parrot -> drawTable();
        echo '<br>';

        //делаем таблицу с пресмыкающимися
        $turtle -> drawTable();
        $crocodile -> drawTable();
        echo '<br>';

        //делаем таблицу с земноводными
        $triton -> drawTable();
        $frog -> drawTable();
        $salamander -> drawTable();
        echo '<br>';

        //делаем таблицу с рыбами
        $goldFish -> drawTable();
        $som -> drawTable();

        ?>
    </body>
</html>