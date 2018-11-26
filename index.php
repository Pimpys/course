<?php

/* 
 * http://maxsuccess.ru/
 * https://vk.com/pimpys
 * https://www.facebook.com/the.web.lessons/
 * Кодируй так, как будто человек,
 * поддерживающий твой код, - буйный психопат,
 * знающий, где ты живешь.
 */

$scandir = scandir(__DIR__);
foreach ($scandir as $file):
    if(preg_match('/php/', $file)){
        $files[] = $file;
    }
endforeach;

foreach ($files as $value) {
    if (!preg_match('/index.php/', $value)){
        echo "<a href='$value'>$value</a><br/>";
    }
}