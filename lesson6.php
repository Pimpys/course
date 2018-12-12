<?php

//$array = array();
//$array = [];
$array[] = 10; //$array[0] = 10;
$array['ten'] = 10;
$array['assoc'] = [
    100 => 1,
    'ten' => 10,
    TRUE,
    FALSE,
    null,
    'strin type',
];
echo '<pre>';
//var_dump($array);
print_r($array);
//$count = count($array['assoc']);
//
//print $count;

/*
 * Задание 1
1. Создайте массив bmw с ячейками:
"model"
"speed"
"doors"
"year"
2. Заполните ячейки значениями:
"X5", 120, 5, "2006"
3. Создайте массивы toyota и opel аналогичные массиву bmw.
4. Заполните массив toyota значениями:
"Carina", 130, 4, "2007"
5. Заполните массив opel значениями:
"Corsa", 140, 5, "2007"
Задание 2
Выведите значения всех трёх массивов в виде:
name - model - speed - doors - year, например:
bmw - 120 - 5 – 2006
 */

$bmw = [
    "model" => "X5",
    "speed" => 120,
    "doors" => 5,
    "year" => "2006",
];

//bmw - 120 - 5 – 2006

echo '<br>';
echo "bmw - $bmw[model] - $bmw[speed]";