<?php
$auto = 'Car';
echo "$auto's Множество<br/>";
echo "Одно $auto<br/>";
echo "Тоже множество ${auto}s<br/>";
echo "Так тоже множество {$auto}s<br/>";
echo "Так будет пусто $autos<br/>";


$str = 'Hello, world!';
// Получение первого символа строки
echo $first = $str{0}; // H
// Получение третьего символа строки
echo $third = $str{2}; // l
// Получение последнего символа строки
echo $last = $str{strlen($str) - 1}; // !

$a = 3;
$b = 2;
//$a + $b; // Сумма $a и $b = 5
//$a - $b; // Разность $a и $b = 1
//$a * $b; // Произведение $a и $b = 6
//echo $a / $b; // Частное от деления $a на $b = 1.5
//echo $a % $b; // Целочисленный остаток от = 1
//деления $a на $b
//5/2 равно 2.5, но 5%2 равно 1
echo $a /= $b; // Тоже, что и $a = $a + $b.
//Остальные операторы работают аналогично


$a = "Hello ";
$b = $a . "World!"; // $b содержит строку Hello World!
$a = "Hello ";
$a .= "World!"; // $a содержит строку Hello World!
$a = "Hello";
$b = "World!";
print $a . " " . $b; // Hello World! // ''
//Можно и так:
echo $a , " " , $b;


//isset();//true false
//empty();
//gettype(); //gettype($b); string
//settype($b, 'int');//0