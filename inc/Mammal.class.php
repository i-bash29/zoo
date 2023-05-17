<?php
spl_autoload_register(function ($class_name) {
    include $class_name . '.class.php';
});

//Создаем класс Млекопитающие
class Mammal extends Animal
{
    public static $count = 0; //для подсчета количества объектов
    public static $n = 1; //для таблицы животных
    public $height; //рост
    private $isHair; //есть ли шерсть
    private $hairColor; //цвет шерсти
    private $hairLength; //длина шерсти
    private $isLiveInWater; //живет в воде или нет
    public function __construct($name, $weight, $type, $food, $height, $isHair, $hairColor, $hairLength, $isLiveInWater = 0) {
        parent::__construct($name, $weight, $type, $food);
        $this->height = $height; //добавляем к родительскому конструктору рост
        $this->isHair = $isHair; //добавляем к родительскому конструктору есть ли шерсть
        $this->hairColor = $hairColor; //добавляем к родительскому конструктору цвет шерсти
        $this->hairLength = $hairLength; //добавляем к родительскому конструктору длину шерсти
        $this->isLiveInWater = $isLiveInWater; //добавляем к родительскому конструктору в воде ли живет
        self::$count++; //счетчик объектов
    }
    // метод для описания шерсти
    private function isHair() {
        if($this -> isHair == 1){
            echo $this -> type . ' имеет шерсть длиной ' . $this->hairLength . ', цвет ' . $this->hairColor . '.' . '<br>';
        } else {
            echo $this -> type . ' не имеет шерсти.' . '<br>';
        }
    }
    //метод для описания, в воде живет или нет
    private function isLiveInWater() {
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
                <tbody>';
        }
        echo '<tr>';
        echo '<td>' . $i . '</td>';
        echo '<td>' . $this -> name . '</td>';
        echo '<td>' . $this -> weight . '</td>';
        echo '<td>' . $this -> type . '</td>';
        echo '<td>' . $this -> height . '</td><td>';
        echo $this -> eat() . $this -> isHair() . $this -> isLiveInWater() . '</td>';
        echo '</tr>';
        self::$n++;
        if ($i == self::$count) {
            echo '</tbody>
            </table>';
        }
    }
}