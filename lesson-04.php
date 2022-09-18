<?php

$firstPath = [
    'one' => [
        'two' => 44,
        'three' => 55,
    ],
    'two' => 2,
    'four' => [
        'olena' => 32,
        'Vitalii' => 42,
        'Vasya' => 20,
    ],
    'five' => 5,
];




//Создать функцию которая считает все буквы b в переданной строке,
// в случае если передается не строка функция должна возвращать false
$strString = 'bob is the better boy bbb';
$g = 'b';

function task2($String, $letter): int
{
    return substr_count($String, $letter);
}

print task2($strString, $g). '<br>';


//Создать функцию которая считает сумму значений всех элементов массива произвольной глубины
$lemon = [
    'one' => [
        'two' => 1,
        'three' => 3,
    ],
    'two' => 1,
    'four' => [
        'olena' => [
            'b' => 5,
            'c' => [
                'f' => 20,
                'd' => 20,
            ],
        ] ,
        'Vitalii' => 4,
        'Vasya' => 8,
    ],
    'five' => 0,
];

function get_sum(array $arr) : float
{
    $sum = array_sum($arr);

    foreach ($arr as $item){
        $sum += is_array($item) ? get_sum($item) : 0;
    }

    return $sum;
}

print get_sum($lemon).'<br>';


//Создать функцию которая определит сколько квадратов меньшего размера можно вписать
//в квадрат большего размера размер возвращать в float
$squareBig = 25;
$squareSmall = 4;

function get_result($squareBig, $squareSmall): float
{
    $big = sqrt($squareBig);
    $small = sqrt ($squareSmall);

    $squaresPerOneLine = (int) ($big / $small);

    $totalSmallSquares = $squaresPerOneLine ** 2;

    return $totalSmallSquares;
}

print get_result($squareBig, $squareSmall). '<br>';
