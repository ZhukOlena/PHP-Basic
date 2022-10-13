<?php

$array = [];

for ($w = 1; $w <= 50; $w++) {
    $item = random_int(0, 10000);
    $array[] = $item;
}

shuffle($array);
print_r($array);
echo '<br>';

//  Отримати суму всіх елементів
$sumOfArray = array_sum($array);

echo 'Sum of all elements - '.$sumOfArray . "<br>";

//Отримати середнє значення всіх елементів
function testVar2(array $array): string
{
    $countArray = count($array);
    $arraySum = array_sum($array);
    $averageV = $arraySum / $countArray;

    return $averageV;
}

print 'Average value of array - ' . testVar2($array) . '<br>';

// Sort our array
sort($array);

$minArrays = [];

for ($i = 0; $i < 5; $i++) {
    $minArrays[] = $array[$i];
}

$maxArrays = [];
$countOfElements = count($array);

for ($i = $countOfElements - 1; $i > $countOfElements - 6; $i--) {
    $maxArrays[] = $array[$i];
}


// отримати 5 мінімальних чисел з масиву
echo 'Min of all numbers' . "<br>";
print_r($minArrays);
print '<br>';

// отримати 5 максимальних  чисел з масиву
echo 'Max of all numbers' . "<br>";
print_r($maxArrays);
print '<br>';

// Відсортувати масив за ростом
sort($array);
print 'Sort array from first - ';
var_dump($array) . '<br>';
echo '<br>';

// Відсортувати масив за спадом
print 'Sort array from last - ';
rsort($array);
var_dump($array);

