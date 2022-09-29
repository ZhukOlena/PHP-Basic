<?php

$a = 7;
$b = 3;
$result = $a % $b;
print 'Result: '.$result.'<br>';




$a = 7;
$b = 7.15;
$result =round($a +$b);
print 'Result:'.$result.'<br>';



$a = 25;
$result = sqrt($a);
print 'Result: '.$result.'<br>';




// отримати 4-те слово із фрази
$a = 'десять негретят пішли купатись в море';
$pieces = explode(' ', $a);
print 'Result: '.$pieces[3].'<br>';



// отримати 17-й символ із фрази
$a = 'десять негретят пішли купатись в море';
$result = mb_substr($a, 16,1);
print 'Result: '.$result.'<br>';

//зробити головною букву  у всіх словах фрази
$a = 'десять негретят пішли купатись в море';
$result = ucwords($a);
print 'Result: '.$result.'<br>';



// підрахувати довжину строки
$a = 'десять негретят пішли купатись в море';
$result = mb_strlen($a);
print 'Result: '.$result.'<br>';


if (true == 1) {
    print 'true == 1<br>';
}

if (false === 0) {
    print 'false === 0<br>';
}



// true == 1 - Yes
// false === 0 - No
// three more than три

$a = 125 * 13 + 7;
$b = 223 + 28 * 2;

if ($a > $b) {
    print '$a > $b<br>';
} else {
    print '$a < $b<br>';
}