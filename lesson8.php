<?php
$username = 'Max';
$user = false;

function hello($name = 'guest')
{
    echo 'Hello ' . $name;
}

if($user == true){
//    hello($username);
}else{
//    hello();
}
/*
ЗАДАНИЕ 1
- Опишите функцию getMenu()
- Задайте для функции первый аргумент $menu, в него будет передаваться массив, содержащий структуру меню
 * 
ЗАДАНИЕ 2
- Откройте файл index.php
- Скопируйте код, который отрисовывает меню и вставьте скопированный код в тело функции getMenu()
- массив $menu нужно передать функции getMenu() как аргумент
- вызовите функцию getMenu() с переданным в неё массивом.
- проверьте результат
*/

function calculate($paramOne, $operator, $paramTwo)
{
    switch ($operator) {
        case '+':
            $result = $paramOne + $paramTwo;
            break;

        case '-':
            $result = $paramOne - $paramTwo;
            break;
        
        case '*':
            $result = $paramOne * $paramTwo;
            break;
        
        case '/':
            if($paramTwo == 0){
                $result = 'На ноль делить нельзя!';
            }else{
                $result = $paramOne / $paramTwo;
            }
            break;
        default:
            $result = 'Неизвестный оператор!';//+-*/
            break;
    }
    return $result;
}

//echo calculate(10, '/', 2);

function staticNumber()
{
    static $a = 0;
    echo $a . '<br/>';
    $a++;
}

//staticNumber();//0
//staticNumber();//1
//staticNumber();//2
//staticNumber();//3
//staticNumber();//4

function changeUserName()
{
    global $username;
    $username = 'Piter';
}

changeUserName();

echo $username;