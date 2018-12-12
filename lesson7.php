<?php
$array = [
    100,
    1,
    'ten',
    10,
    TRUE,
    FALSE,
    null,
    'strin type',
];
//
//for($i = 0; $i <= 10; $i++){
//    echo $array[$i] . '<br/>';
//}


//$i = 0;
//while ($i <= 10){
//    echo $array[$i] . '<br/>';
//    $i++;
//}

//
$users = [
    [
        'username' => 'admin',
        'pass' => 'password',
        'email' => 'email@email.ru'
    ],
    [
        'username' => 'user',
        'pass' => 'userpasssword',
        'email' => 'user@email.ru'
    ]
];
foreach ($users as $value) {
    foreach ($value as $user){
        echo "значение: $user" . '<br/>';
    }
}
//$user = [
//    'username' => 'admin',
//    'pass' => 'password',
//    'email' => 'email@email.ru'
//];
//
//foreach ($user as $key => $value) {
//        echo "Ключ: $key => Его значение: $value" . '<br/>';
//}