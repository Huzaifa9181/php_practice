<?php

// connecting mysql we need to declare these variable

$servername = "localhost";
$username = "root";
$password = "";
$database = "form";

// connecting a sql we need to use func mysqli

$conn = mysqli_connect($servername,$username,$password,$database);

if(!$conn){
    echo "your connection will be failed! <br>";
}else{
    echo "you connect Succefully <br>";
}


//$ins = "UPDATE `contact` SET `name` = 'Raees' WHERE `name` = 'Prime Minister ';";
$ins = "SELECT * FROM `contact` WHERE name = 'Sami'";

$sql = mysqli_query($conn,$ins);

echo "<pre>";
print_r($sql);
echo "</pre>";

$num = mysqli_num_rows($sql);
$count = 1;
if($num > 0){
    while($row = mysqli_fetch_assoc($sql)){
        echo  $count . " hello your good name is " . $row['name'] . " and " . $row['email'] . "<br>";
        $count = $count + 1;
    }
}

$aff = mysqli_affected_rows($conn);
echo "You update a affacted data in records is " . $aff . "<br>";


if($sql){
    echo "Succefully you updated a data <br>";
}
else{
    echo "sorry you does not updated a data " . mysqli_error($connection);
}


?>