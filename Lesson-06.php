<?php
$array =[1,2,3,4,5,66,78,99,115];


function homeWork(array $array, $title, $listType): string
{
    $html = '<h3>'.$title.'</h3>';

    $html .= '<'.$listType.'>'; // <ul> or <ol>

    foreach ($array as $value) {
       $html .= '<li>'.$value.'</li>';
    }

    $html .= '</'.$listType.'>';

    return $html;
}


$html = homeWork($array, 'List of numbers:', 'ul');
$html .= homeWork($array, 'Numbers:', 'ol');

print $html;

