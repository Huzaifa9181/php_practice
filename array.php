<?php

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



?>