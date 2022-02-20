<?php

function hello(){
    echo "hello everyone <br>";
}

hello();
hello();
echo "This is example of function <br>" ;
hello();
hello();
hello();
hello();

// parameter Function

function sum($a,$b){
$c = $a + $b;
echo $c;
}

sum(5,10);

function user($fname = "first Name ",$lname = "last Name"){
    echo  "<br> My name is " . $fname . $lname;    
}

// 3 conditions to write a argument

user("huzaifa ","ahmed" );
user("huzaifa");
user();

echo '<br>';
echo '<br>';
echo 'Variable Fuction';
echo '<br>';
echo '<br>';

// Variable Function

$sayName = function ($name){
    echo "hello $name";
};

$sayName('huzaifa');

//  2nd Way 

function detail($name,$age){
    echo "<br> My name is $name. I am $age years old. <br>";
}

$func = "detail";
$func("huzaifa",16);

$data = "detail";
$data("abdullah",18);


?>