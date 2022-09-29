<?php
$array =[1,2,3,4,5,66,78,99,115];


 function homeWork(array $array): string
 {
    $html = '<h3>List of numbers:</h3>';
    $html .= '<ul>';

    foreach ($array as $value) {
        $html .= '<li>'.$value.'</li>';
    }

    $html .= '</ul>';

    return $html;
}

print_r(homeWork($array));



