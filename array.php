<?php

/*
$a = array(1,2,30);

echo $a[2];

// 2nd way to write a array

$colors = ["red","green","blue","purple"];

echo "<ul>";
for($i = 0; $i < 4; $i++){
    echo "<li> $colors[$i] </li>" ;
}
echo "</ul>";

//  3rd way to write a array
$subj[0] = "comp";
$subj[1] = "chem";
$subj[2] = "phy";
$subj[3] = "sindhi";

echo $subj[2];

echo "<pre>";

print_r($subj);

echo "</pre>";

// associative array

$marks = [
    "math" => 82,
    "comp" => 88,
    "phy" => 92,
    "sindhi" => 72
];

echo "<br> associative array <br>";
echo $marks["math"] . "<br>";
echo $marks["comp"] . "<br>";
echo $marks["phy"] . "<br>";
echo $marks["sindhi"] . "<br>";


$emp = [
    ["1","huzaifa","manager","16"],
    ["2","hamza","CEO","16"],
    ["3","abdullah","Officer","16"],
    ["4","sami","employ","16"]
];

echo "<table border='2px'>";
foreach($emp as $value){
    echo "<tr>";
    foreach($value as $data){
        echo "<td> $data  </td>";
    }
    echo "</tr>";

 echo "<br>";   
}
echo "</table>";

$student = [
    "huzaifa" => [
        'physics' => 88,
        'chemistry' => 98,
        'computer' => 92,
        'english' => 87
    ],
    "sami" => [
        'physics' => 88,
        'chemistry' => 98,
        'computer' => 92,
        'english' => 87
    ],
    "hamza" => [
        'physics' => 88,
        'chemistry' => 98,
        'computer' => 92,
        'english' => 87
    ]
];

echo "<table border='2px' cellspacing = '0px cellpadding='5px' >";
echo "<tr>
    <th>student Name</th>
    <th>physics</th>
    <th>chemistry</th>
    <th>computer</th>
    <th>english</th>
</tr>";
foreach($student as $key => $val){
    echo "<tr><td> $key </td>";
    foreach($val as $val2){
        echo "<td>$val2 </td>";
    }
    echo "</tr>";
}

echo "</table>";

// $employes = [
//     ["1","huzaifa","manager",50000],
//     ["2","hamza","CEO",20000],
//     ["3","abdullah","Officer",50000],
//     ["4","sami","employ",60000]
// ];

echo "<br>";

// multidimensional array

$employes = [
    ["id" => 1,"name" => "huzaifa","designation" => "Owner","salary" => 50000],
    ["id" => 2,"name" => "hamza","designation" => "manager","salary" => 60000],
    ["id" => 3,"name" => "sami","designation" => "manager","salary" => 70000],
    ["id" => 4,"name" => "abdullah","designation" => "Ceo","salary" => 80000]
];


echo "<table border='2px' cellpadding = '5px' cellspacing = '0px'>";
echo "<tr>
        <th>Id</th>
        <th>Name</th>
        <th>Designation</th>
        <th>Salary</th>
</tr>";
foreach($employes as list("id" => $id,"name" => $name, "designation" => $designation, "salary" => $salary)){
    echo "<tr><td> $id </td>
    <td> $name</td>
    <td> $designation</td>
    <td> $salary</td>
    </tr>";
};
  
echo "</table>";


// count te value of array for use this function [count] , [sizeof] , [array_count_values]

$food = ['orange', 'apple','apple','Banana','pineapple'];

echo count($food) . "<br>"; // 4
echo sizeof($food); // 4
echo ("<pre>");
print_r(array_count_values($food));
echo ("</pre>");

echo "<br>";
for($i = 0; $i < 4; $i++){
    echo $food[$i] . "<br>";
};


$fruits = [
    'fruit' =>  ['orange', 'apple','Banana','pineapple'],
    'vegatable' =>  ['orange', 'apple','Banana','pineapple'],
];

echo count($fruits,1). "<br>";
echo count($fruits['vegatable']);

echo "<br>";

$book = ['comp','phy','pst','sindhi'];

echo in_array('phy', $book); // 0 or 1 answer

echo "<br>";

echo array_search('sindhi', $book); // index or key search

if(in_array('phy', $book)){
    echo "Succefully Find.";
}else{
    echo "Can't Find.";
}
echo "<br>";


$copy = [
    'computer' => 'comp',
    'physics' => 'phy',
    'pakistan_studies' => 'pst',
    'sindhi' => 'sindhi'
];

    echo array_search('phy',$copy);
    echo "<br>";

    //  replaced function

    $car = ["audi","mercedes","toyotta","KIA"];
    $new_car = ["porshe","honda"];

    $rep_car = array_replace($car,$new_car);

    echo "<pre>";
    print_r($rep_car);
    echo "</pre>";


    $color = [
        "a" => ["red"],
        "b" => ["Green" , "blue"]
    ];

    $new_color = [
        "a" => ["pink"],
        "b" => ["yellow"]
    ];

    $newArray = array_replace_recursive($color,$new_color);

    echo "<pre>";
    print_r($newArray);
    echo "</pre>";  

    // push or pop

    $Newfruit = ["banana","apple","grapes"];

    // array_pop($Newfruit);

    array_push($Newfruit , "strawberries","lemons","oranges");

    echo "<pre>";
    print_r($Newfruit);
    echo "</pre>";

    // shift or unsift 

    $laptop = ["dell","lenevo","hp"];

    // array_shift($laptop);
    array_unshift($laptop,"microsoft","my laptop");
    
    echo "<pre>";
    print_r($laptop);
    echo "</pre>";
*/

    // array merge

    $food = [ 'a' => 'orange', 'b' => 'apple', 'c' => 'Banana', 'd' => 'pineapple'];

    $veggie = [ 'a' => 'carrot', 'e' => 'pea'];

    $newArray = array_merge($food,$veggie);


    echo "<pre>";
    print_r($newArray);
    echo "</pre>";

    // array combine

    $name = ['huzaifa' , 'hamza' , 'sami'];
    $age = [16 , 24 , 22];

    $comb = array_combine($name,$age);

    echo "<pre>";
    print_r($comb);
    echo "</pre>";

    // array recursive
 
    $car = ['a' => 'toyota', 'b' => 'audi', 'c' => 'kia'];
    $model = ['a' => 2000, "e" => 1455 ];

    $rec = array_merge_recursive($car,$model);

    echo "<pre>";
    print_r($rec);
    echo "</pre>";

    // type 2

    $food = [ 'a' => 'orange', 'b' => 'apple', 'c' => 'Banana', 'd' => 'pineapple'];

    $veggie = [ 'a' => [  'carrot',"banaan"],
                 'e' => 'pea'];

    $newArray = array_merge_recursive($food,$veggie);


    echo "<pre>";
    print_r($newArray);
    echo "</pre>";


?>