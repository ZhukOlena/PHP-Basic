<?php


$arr = [
    1,
    2,
    [
        3,
        4,
        5,
        [
            1,
            2,
        ],
    ],
    3,
];

function arrayParse(array $arr, int $exteriorKey): array
{
    $result = [];
    foreach ($arr as $key => $value) {
        if (is_array($value)) {
            $result = array_merge($result, arrayParse($value, $exteriorKey));
        } else {
            if ($key === $exteriorKey) {
                $result[] = $value;
            }
        }
    }
    return $result;
}

var_dump(arrayParse($arr, 1) );



//Создать функцию которая считает все буквы b в переданной строке,
// в случае если передается не строка функция должна возвращать false
$strString = 'better boy bbb';
$g = 'b';

function task2($StringS, $letter): int
{
    if (is_string($StringS)){
        return substr_count($StringS, $letter);
    } else {
        return false;
    }
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
$squareBig = 87;
$squareSmall = 13;

function get_result($squareBig, $squareSmall): float
{
    $big = sqrt($squareBig);
    $small = sqrt ($squareSmall);

    $squaresPerOneLine = (int) ($big / $small);

    $totalSmallSquares = $squaresPerOneLine ** 2;

    return $totalSmallSquares;
}

print get_result($squareBig, $squareSmall). '<br>';
