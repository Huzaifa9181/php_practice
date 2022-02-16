<?php

function number($num){
    $num += 8;
}
$numb = 5;

number($numb);
echo "value of number is " . $numb ."<br>";

// thats called argument refernce

function second(&$num){
    $num += 8;
}
$numb = 5;

second($numb);
echo "value of number is " . $numb;


?>