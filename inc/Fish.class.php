<?php
spl_autoload_register(function ($class_name) {
    include $class_name . '.class.php';
});

//Создаем класс Рыба
class Fish extends Animal
{
    public static $count = 0; //для подсчета количества объектов
    public static $n = 1; //для таблицы животных
    public $length; //длина
    private $isSoldWater; //в соленой или пресной воде обитает
    public function __construct($name, $weight, $type, $food, $length, $isSoldWater = 1) {
        parent::__construct($name, $weight, $type, $food);
        $this->length = $length; //добавляем к родительскому конструктору длину
        $this->isSoldWater = $isSoldWater; //добавляем к родительскому конструктору в какой воде обитает
        self::$count++; //счетчик объектов
    }
    // в какой воде живет
    public function isSoldWater(){
        if($this -> isSoldWater == 1){
            echo $this -> type . ' обитает в соленой морской воде.' . '<br>';
        } else {
            echo $this -> type . ' обитает в пресной воде.' . '<br>';
        }
    }
     // метод для вывода данных в таблицу
     public function drowTable() {
        $i = self::$n;
        if ($i == 1) {
            echo '<table>
            <caption>Список рыб</caption>
            <thead>
                <tr>
                <th>№</th>
                <th>Имя</th>
                <th>Вес</th>
                <th>Тип</th>
                <th>Длина</th>
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
        echo '<td>' . $this -> length . '</td><td>';
        echo $this -> eat() . $this -> isSoldWater() . '</td>';
        echo '</tr>';
        self::$n++;
        if ($i == self::$count) {
            echo '</tbody>
            </table>';
        }
    }
}