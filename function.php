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

// 3 conditions

user("huzaifa ","ahmed" );
user("huzaifa");
user();


?>