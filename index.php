<?php
include 'inc/zoo.php';
?>
<!DOCTYPE html>
<html>
	<head>
		<title><?= $title?></title>
		<meta charset="utf-8" />
		<link rel="stylesheet" type="text/css" href="inc/style.css" />
	</head>
	<body>
        <h1> Зоопарк</h1>
        <p>Зоопарк содержит <?=$animalsCount ?> животных:</p>
        <ul>
            <li>Млекопитающие: <?=Mammal::$count ?></li>
            <li>Птицы: <?=Bird::$count ?></li>
            <li>Пресмыкающиеся: <?=Reptile::$count ?></li>
            <li>Земноводные: <?=Amphibian::$count ?></li>
            <li>Рыбы: <?=Fish::$count ?></li>
        </ul>
        <?php
        //делаем таблицу с млекопитающими
        $firstMonkey -> drowTable();
        $secondMonkey -> drowTable();
        $lion -> drowTable();
        $dolphin -> drowTable();
        echo '<br>';

        //делаем таблицу с птицами
        $owl -> drowTable();
        $parrot -> drowTable();
        echo '<br>';

        //делаем таблицу с пресмыкающимися
        $turtle -> drowTable();
        $crocodile -> drowTable();
        echo '<br>';

        //делаем таблицу с земноводными
        $triton -> drowTable();
        $frog -> drowTable();
        $salamander -> drowTable();
        echo '<br>';

        //делаем таблицу с рыбами
        $goldFish -> drowTable();
        $som -> drowTable();

        ?>
    </body>
</html>