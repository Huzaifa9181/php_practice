<?php

// array slice

$color = ["red",'green',"blue","yellow"];

$newArray = array_slice($color , 1 , 3 ,true);

echo "<pre>";
print_r($newArray);
echo "</pre>";


$color = ['a' => "red", '25' => 'green', 'b' => "blue", 'c' => "yellow"];

$newArray = array_slice($color , 1 , 3 ,true);

echo "<pre>";
print_r($newArray);
echo "</pre>";


$color = [1 => "red", 2 => 'green', 3 => "blue", 4 => "yellow"];

$newArray = array_slice($color , 1 , 3 ,true); // ceck witout true

echo "<pre>";
print_r($newArray);
echo "</pre>";


// array splice

$color = ["red",'green',"blue","yellow"];

$newColor = ["violet","indigo"];

array_splice($color , 0 , 0,$newColor);

echo "<pre>";
print_r($color);
echo "</pre>";

// array keys

$marks = [
    "math" => 82,
    "comp" => 88,
    "phy" => 92,
    "sindhi" => 72
];


// $keys = array_keys($marks);
// $keys = array_key_first($marks);
// $keys = array_key_last($marks);
$keys = array_key_exists("phy",$marks);

if($keys == 1){
    echo "key exsist!";
}else{
    echo "key does not exsist!";
}

echo "<pre>";
print_r($keys);
echo "</pre>";

// Array Intersect Functions

$color = ["red",'green',"blue","yellow"];
$newColor = ["red","violet","indigo"];

$newArray = array_intersect($color,$newColor);

echo "<pre>";
print_r($newArray);
echo "</pre>";

// associative

$color = ['a' => "red", 'b' => "blue", 'c' => "yellow"];
$newColor = ['a' => "red",'d' => "violet", 'c' => "indigo"];

$newArray = array_intersect_key($color,$newColor);

echo "<pre>";
print_r($newArray);
echo "</pre>";

// associative

$color = ['a' => "red", 'b' => "blue", 'c' => "yellow"];
$newColor = ['a' => "red",'d' => "violet", 'c' => "indigo"];

$newArray = array_intersect_assoc($color,$newColor);

echo "<pre>";
print_r($newArray);
echo "</pre>";

function compare($a,$b){
    if($a === $b){
        return 0;
    }
    return($a > $b)? 1 : -1;
}

$color = ['a' => "green", 'b' => "blue", 'c' => "yellow"];
$newColor = ['a' => "green",'d' => "violet", 'c' => "indigo"];

$newArray = array_intersect_uassoc($color,$newColor,"compare");

echo "<pre>";
print_r($newArray);
echo "</pre>";

// ukey

$color = ['a' => "green", 'b' => "blue", 'c' => "yellow"];
$newColor = ['a' => "green",'d' => "violet", 'c' => "indigo"];

$newArray = array_intersect_ukey($color,$newColor,"compare");

echo "<pre>";
print_r($newArray);
echo "</pre>";

// uintersect

$color = ['a' => "green", 'b' => "blue", 'c' => "yellow"];
$newColor = ['a' => "green",'d' => "violet", 'e' => "blue" , 'c' => "indigo"];

$newArray = array_uintersect($color,$newColor,"compare");

echo "<pre>";
print_r($newArray);
echo "</pre>";

// uassoc with uintersect

function compareVal($a,$b){
    if($a === $b){
        return 0;
    }
    return($a > $b)? 1 : -1;
}

$color = ['a' => "green", 'b' => "blue", 'c' => "yellow"];
$newColor = ['a' => "green",'d' => "violet", 'e' => "blue" , 'c' => "yellow"];

$newArray = array_uintersect_uassoc($color,$newColor,"compare","compareVal");

echo "<pre>";
print_r($newArray);
echo "</pre>";

// array diff

$a1 = ['a' => "green", 'b' => "blue", 'c' => "yellow" , 'd' => "violet"];
$a2 =  ['a' => "green", 'e' => "blue" , 'c' => "yellow"];

// $newArray = array_diff($a1 , $a2);
$newArray = array_diff_key($a1 , $a2);

echo "<pre>";
print_r($newArray);
echo "</pre>";

// array diff assoc

$a1 = ['a' => "green", 'e' => "blue", 'c' => "yellow" , 'd' => "violet"];
$a2 =  ['a' => "green", 'e' => "blue" , 'c' => "yellow"];

$newArray = array_diff_assoc($a1 , $a2);

echo "<pre>";
print_r($newArray);
echo "</pre>";

// array diff uassoc

function compare1($a , $b){
    if($a === $b){
        return 0;
    }
    elseif($a > $b ){
        return 1;
    }
    elseif($a < $b ){
        return -1;
    }
    
}

$a1 = ['a' => "green", 'b' => "blue", 'c' => "yellow" , 'd' => "violet"];
$a2 =  ['a' => "green", 'e' => "blue" , 'c' => "yellow"];

$newArray = array_diff_uassoc($a1 , $a2,"compare1");

echo "<pre>";
print_r($newArray);
echo "</pre>";

// array ukey

$a1 = ['a' => "green", 'e' => "blue", 'l' => "yellow" , 'd' => "violet"];
$a2 =  ['a' => "green", 'e' => "blue" , 'c' => "yellow"];

$newArray = array_diff_ukey($a1 , $a2,"compare");

echo "<pre>";
print_r($newArray);
echo "</pre>";

// array value or unique

$a2 = ['a' => "green", 'b' => "blue", 'c' => "yellow" ,'f' => "blue", 'd' => "violet"];

// $newArray = array_values($a1);
$newArray1 = array_unique($a2);

echo "<pre>";
print_r($newArray1);
echo "</pre>";

echo '<br> Array Column';
$array = array(
array(
    "id" => "4",
    "name" => "huzaifa",
    "last_name" => "Ahmed",
),

array(
    "id" => "1",
    "name" => "hamza",
    "last_name" => "Ahmed",
),

array( 
    "id" => "3",
    "name" => "abdullah",
    "last_name" => "Ahmed",
)
);

$arrayColumn = array_column($array,'name','id');

echo "<pre>";
print_r($arrayColumn);
echo "</pre>";


echo "<br> Array Chunk";

$shoes = ["nike","adidas","Cherry","simple"];

$arrayChunk = array_chunk($shoes,2,true);

echo "<pre>";
print_r($arrayChunk);
echo "</pre>";

echo "<br> Array Flip";

$data = [
    "name" => "huzaifa",
    "age" => "16",
    "class" => "Matric",
];

$arrayFlip = array_flip($data);

echo "<pre>";
print_r($arrayFlip);
echo "</pre>";

echo "<br> Array Change key Case";

$data = [
    "name" => "huzaifa",
    "age" => "16",
    "class" => "Matric",
];

$arrayFlip = array_change_key_case($data,CASE_UPPER);

echo "<pre>";
print_r($arrayFlip);
echo "</pre>";

echo "<br> Array Sum";

$sum = [12,3,5,6,9];

$arraySum = array_sum($sum);
$arrayProd = array_product($sum);

echo "<br> Sum = $arraySum";
echo "<br> Product = $arrayProd";

echo "<br> Array Rand <br>";

$color = ["red","green","blue","yellow"];

$arrayRand = array_rand($color,2);

echo "<pre>";
print_r($arrayRand);
echo "</pre>";

echo  $color[$arrayRand[0]] ;
echo  $color[$arrayRand[1]];

echo "<br> Array Shuffle";

$color = ["red","green","blue","yellow"];

shuffle($color);

echo "<pre>";
print_r($color);
echo "</pre>";

$a = ["a","b","c","d"];

$arrayFill = array_fill_keys($a,"test");

echo "<pre>";
print_r($arrayFill);
echo "</pre>";

$arrayFil = array_fill(5,6,"testing");

echo "<pre>";
print_r($arrayFil);
echo "</pre>";

// array walk


$color = [
    "a" => "red",
    "b" => "blue",
    "c" => "yellow",
    "d" => "green",
];

$arrayWalk = array_walk($color,"myWalk","is a key of");

function myWalk($values , $keys , $par){
    echo "$keys $par $values <br> ";
}


// array walk recursive

$addColor = array("e" => "pink","f" => "orange");

echo "<br>";
echo "<br>";
echo "<br>";

$new_color = [
    $addColor,
    "a" => "red",
    "b" => "blue",
    "c" => "yellow",
    "d" => "green",
];

$arrayWalkRec = array_walk_recursive($new_color,"myWalkRecursive","is a key of");

function myWalkRecursive($values , $keys , $par){
    echo "$keys $par $values <br> ";
}











?>