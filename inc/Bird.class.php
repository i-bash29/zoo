<?php
spl_autoload_register(function ($class_name) {
    include $class_name . '.class.php';
});

//Создаем класс Птица
class Bird extends Animal
{
    public static $count = 0; //для подсчета количества объектов
    public static $n = 1; //для таблицы животных
    public $wingspan; //размах крыльев
    public $color; //цвет
    public function __construct($name, $weight, $type, $food, $wingspan, $color) {
        parent::__construct($name, $weight, $type, $food);
        $this->wingspan = $wingspan; //добавляем к родительскому конструктору размах крыльев
        $this->color = $color; //добавляем к родительскому конструктору цвет
        self::$count++; //счетчик объектов
    }
    // метод для вывода данных в таблицу
    public function drowTable() {
        $i = self::$n;
        if ($i == 1) {
            echo '<table>
            <caption>Список птиц</caption>
            <thead>
                <tr>
                <th>№</th>
                <th>Имя</th>
                <th>Вес</th>
                <th>Тип</th>
                <th>Размах крыльев</th>
                <th>Цвет</th>
                <th>Описание</th>
                </tr>
                </thead>
                <tbody>';
        }
        echo '<tr>';
        echo '<td>' . $i . '</td>';
        echo '<td>' . $this -> name . '</td>';
        echo '<td>' . $this -> weight . '</td>';
        echo '<td>' . $this -> type . '</td>';
        echo '<td>' . $this -> wingspan . '</td>';
        echo '<td>' . $this -> color . '</td><td>';
        echo $this -> eat() . '</td>';
        echo '</tr>';
        self::$n++;
        if ($i == self::$count) {
            echo '</tbody>
            </table>';
        }
    }
}