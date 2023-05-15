<?php
include 'inc/zoo.php';
?>
<h1> Зоопарк</h1>
<p>Зоопарк содержит <?=$animalsCount ?> животных:</p>
<ul>
    <li>Млекопитающие: <?=Mammal::$count ?></li>
    <li>Птицы: <?=Bird::$count ?></li>
    <li>Пресмыкающиеся: <?=Reptile::$count ?></li>
    <li>Земноводные: <?=Amphibian::$count ?></li>
    <li>Рыбы: <?=Fish::$count ?></li>
</ul>

<table>
    <caption>Список млекопитающих</caption>
    <thead>
        <tr>
            <th>№</th>
            <th>Имя</th>
            <th>Вес</th>
            <th>Тип</th>
            <th>Рост</th>
            <th>Описание</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $i = 0;
        $n = 1;
        foreach($mammals as $mamal) {
            echo '<tr>';
            echo '<td> $' . $mammals[$i] . '-> name' . '</td>';
            echo '<td>' . $n . '</td>';
            echo '<td>' . $n . '</td>';
            echo '<td>' . $n . '</td>';
            echo '<td>' . $n . '</td>';
            echo '<td>' . $n . '</td>';
            echo '</tr>';
            $i++;
            $n++;
        }