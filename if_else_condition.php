<?php

$a = 2;
$b = 5;

if($a < $b){
    echo "a is less than b <br>";
}

// if condition wit logical operators

$age = 20;

if($age >= 18 && $age >= 22){
    echo "You are eligible to marriage <br>";
}


if($age >= 18 || $age <= 30){
    echo "You are eligible to buy mobile <br>";
}


if (!($age >= 30)){
    echo "You are eligible to sucide <br>";
}

// if else condition

$x = 120;

if($x == 120){
    echo "x is greater <br>";
}else{
    echo "x is smaller";
}

$name = "huzaifa";
$gender = "male";

if($gender == "male"){
    echo "hello Mr." . $name . "<br>";
}else{
    echo "hello Miss." . $name;
}

// else if condition

$per = 45;

if ( $per >= 80 && $per <= 100 ) {
    echo "You are topper";
} elseif( $per >= 70 && $per < 80 ) {
    echo "You are 1st division";
} elseif ( $per >= 60 && $per < 70 ) {
    echo "You are 2nd division";
} elseif ( $per >= 50 && $per < 60 ) {
    echo "You are 3rd division";
} elseif ( $per < 50 ) {
    echo "You are Fail.";
} else {
    echo "enter a valid percenteage";
}












?>

