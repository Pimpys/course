<?php
/**
define('FIRST', 1);
define('USER', 2);
define('ADMIN', 3);

switch (false) {
    case 1:
        echo 'Welcome, enter your username and password';
        break;
    case 2:
        echo 'Hello User';
        break;
    case 3:
        echo 'Hello Admin';
        break;
    default:
        echo 'Access denied';
        break;
}
 */
/**
$isFirst = true;
$isAdmin = true;
$isUser = true;

if ($isFirst)
{
    echo 'Welcome, enter your username and password';
} elseif ($isAdmin)
{
    echo 'Hello Admin';
} elseif ($isUser)
{
    echo 'Hello User';
} else
{
    echo 'Access denied';
}
*/
define('STATUS', 'new');
$status = 'new';
switch ($status) {
    case 'new':
        echo 'red';
        break;
    case 'done':
        echo 'green';
        break;
    default:
        echo 'cancel';
        break;
}

/*
Задание 1
1. Создайте переменную day и присвойте ей произвольное числовое значение
Задание 2
1. С помощью конструкции switch выведите фразу:
"Это рабочий день",
 если значение переменной day попадает в диапазон чисел
от 1 до 5(включительно)
2. Выведите фразу:
"Это выходной день",
 если значение переменной day равно числам 6 или 7
3. Выведите фразу:
"Неизвестный день",
 если значение переменной day не попадает в диапазон чисел
от 1 до 7(включительно)

*/