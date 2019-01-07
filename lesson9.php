<?php

/* 
 * http://maxsuccess.ru/
 * https://vk.com/pimpys
 * https://www.facebook.com/the.web.lessons/
 * Кодируй так, как будто человек,
 * поддерживающий твой код, - буйный психопат,
 * знающий, где ты живешь.
 */

/**
 * Сделать функцию getCountArray( $array ) int
 *  которая будет считать ячейки массива и возвращать результат,
 *  также ее расширить, возможно рекурсия? 
 * Нужно для тренировки воображения 
 */
$array = [
    100,
    1,
    'ten',
    10,
    TRUE,
    FALSE,
    null,
    'strin type',
    '' => [
        100,
         1,
         'ten',
         10,
         TRUE,
         FALSE,
         null,
         'strin type',
    ]
];

function getCountArray( $array , $recursive = false)
{
    $count = 0;
    if(empty($array))
        return $count;
    foreach ($array as $key => $value) {
        if(is_array($value) && $recursive){
            $count += getCountArray($value);
        }
        $count++;
    }
    return $count;
}

echo getCountArray($array, TRUE);
echo '<br/>';
echo count($array, COUNT_RECURSIVE);