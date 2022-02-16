<?php

function subject($math,$comp,$eng){
    $total = $math + $comp + $eng;
    return $total;
}

function percentage($marks){
    $values = $marks / 3;
    return $values;
}

$sum = subject(88,87,99);
echo percentage($sum) . "%";


?>