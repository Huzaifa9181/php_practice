<?php

// While Loop

$val = 1;

while($val <= 10){
    echo $val . (" huzaifa <br>");
    $val++;
}

$val = 1;

echo "<ul>";

while( $val <= 10 ) {
    echo "<li>" . $val . " huzaifa <br>" . "</li>";
    $val++;
}

echo "</ul>";

// Do While loop

$a = 1;

do{
    echo $a . ") PhP <br>";
    $a++;
}while( $a <= 10);

// for loop

for($a = 1; $a <= 10; $a++ ){
    echo "huzaifa <br>";
}

// nested loop

for ( $a = 1; $a <= 100; $a = $a +10){
    for( $b = $a; $b < $a + 10 ; $b++){
        echo  $b . " ";
    }

    echo "<br>";
}

// for each loop

$colors = ["red","green","blue","purple"];

foreach($colors as $data){
    echo $data . "<br>";
}

// associative array

$marks = [
    "math" => 82,
    "comp" => 88,
    "phy" => 92,
    "sindhi" => 72
];

foreach($marks as $key => $value){
    echo "$key = $value <br>";
}

echo "<ul>";
foreach($marks as $key => $value){
    echo "<li> $key = $value <br> </li>";
}
echo "</ul>";

?>