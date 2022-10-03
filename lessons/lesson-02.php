<?php


//підрахувати довжину масива
$arr = [1, 2, 3, 7, 31, 4, 1, 8, 6];
$result = count($arr);
print 'Result: ' . $result . '<br>';


// перемістити перші 4 елементи масиву в кінець масива
$arr = [1, 2, 3, 7, 31, 4, 1, 8, 6];
$firstPart = array_slice($arr, 0, 4);
$secondPart = array_slice($arr, 4);
$result = array_merge($secondPart, $firstPart);
print_r($result);
print '<br>';



// отримати суму 4,5,6 елемента
$arr = [1, 2, 3, 7, 31, 4, 1, 8, 6];
$sliced = array_slice($arr, 3, 3);
$sumSliced = array_sum($sliced);
print 'Result: ' . $sumSliced . '<br>';



//
$firstArr = [
    'one' => 1,
    'two' => 2,
    'three' => 3,
    'foure' => 5,
    'five' => 12,
];


$secondArr = [
    'one' => 1,
    'seven' => 22,
    'three' => 32,
    'foure' => 5,
    'five' => 13,
    'six' => 37,
];

// найти все элементы которые присутствую в первом и отсутствуют во втором
$result = array_diff_key($firstArr, $secondArr);
print_r($result);
print '<br>';

// найти все элементы которые отсутствуют в первом массиве и присутствуют во втором
$result = array_diff_key($secondArr, $firstArr);
print_r ($result);
print '<br>';


// найти все элементы значения которых совпадают
$result = array_intersect($firstArr, $secondArr);
print_r($result);
print '<br>';

// найти все элементы значения которых отличается
$firstDiff = array_diff($firstArr, $secondArr);
$secondDiff = array_diff($secondArr, $firstArr);
$result = array_merge($firstDiff, $secondDiff);
print_r($result);
print '<br>';


$firstArr = [
    'one' => 1,
    'two' => [
        'one' => 1,
        'seven' => 22,
        'three' => 32,
    ],
    'three' => [
        'one' => 1,
        'two' => 2,
    ],
    'foure' => 5,
    'five' => [
        'three' => 32,
        'foure' => 5,
        'five' => 12,
    ],
];

// получить все вторые элементы вложенных массивов
$result = [];

foreach($firstArr as $item){
    if(is_array($item)){
        $values = array_values($item);
        $result[] = $values[1];
    }
}
print_r($result);
print '<br>';



// получить общее количество элементов в массиве
$result = 0;
foreach($firstArr as $value){
    if(is_array($value)){
        $result = $result + count($value);
    } else{
        $result++;
    }
}
print 'count elements: '. $result. '<br>';


// получить сумму всех значений в массиве
$result = 0 ;
foreach($firstArr as $item){
    if(is_array($item)){
        $result = $result + array_sum($item);
    } else{
        $result = $result + $item;
    }
}
print 'Result: ' .$result. '<br>';





