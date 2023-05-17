<?php
spl_autoload_register(function ($class_name) {
    include $class_name . '.class.php';
});

//Создаем класс Земноводные
class Amphibian extends Animal
{
    public static $count = 0; //для подсчета количества объектов
    public static $n = 1; //для таблицы животных
    public $length; //длина
    public $color; //цвет
    private $isTail; //есть ли хвост
    private $tailLength; //длина хвоста
    private $isLiveInWater; //живет в воде или нет
    public function __construct($name, $weight, $type, $food, $length, $color, $isTail, $tailLength, $isLiveInWater = 0) {
        parent::__construct($name, $weight, $type, $food);
        $this->length = $length; //добавляем к родительскому конструктору длину
        $this->color = $color; //добавляем к родительскому конструктору цвет
        $this->isTail = $isTail; //добавляем к родительскому конструктору есть ли хвост
        $this->tailLength = $tailLength; //добавляем к родительскому конструктору длину хвоста
        $this->isLiveInWater = $isLiveInWater; //добавляем к родительскому конструктору в воде ли живет
        self::$count++; //счетчик объектов
    }
    // описание хвоста
    public function isTail(){
        if($this -> isTail == 1){
            echo $this -> type . ' имеет хвост длиной ' . $this->tailLength . '.' . '<br>';
        } else {
            echo $this -> type . ' не имеет хвоста.' . '<br>';
        }
    }
    // живет ли в воде
    public function isLiveInWater(){
        if($this -> isLiveInWater == 1){
            echo $this -> type . ' обитает в воде.' . '<br>';
        } else {
            echo $this -> type . ' обитает на суше.' . '<br>';
        }
    }
    // метод для вывода данных в таблицу
    public function drowTable() {
        $i = self::$n;
        if ($i == 1) {
            echo '<table>
            <caption>Список земноводных</caption>
            <thead>
                <tr>
                <th>№</th>
                <th>Имя</th>
                <th>Вес</th>
                <th>Тип</th>
                <th>Длина</th>
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
        echo '<td>' . $this -> length . '</td>';
        echo '<td>' . $this -> color . '</td><td>';
        echo $this -> eat() . $this -> isTail() . $this -> isLiveInWater() . '</td>';
        echo '</tr>';
        self::$n++;
        if ($i == self::$count) {
            echo '</tbody>
            </table>';
        }
    }
}