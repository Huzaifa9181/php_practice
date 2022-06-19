<?php

// connecting mysql we need to declare these variable

$servername = "localhost";
$username = "root";
$password = "";
$database = "employes";

// connecting a sql we need to use func mysqli

$conn = mysqli_connect($servername,$username,$password,$database);

if(!$conn){
    echo "your connection will be failed! <br>";
}else{
    echo "you connect Succefully <br>";
}

// create a databse 

$ins = "INSERT INTO `trip` ( `name`, `age`, `destination`) VALUES ( 'huzaifa', '16', 'Swizerland');";
$sql = mysqli_query($conn,$ins);

if($sql){
    echo "Succefully you insert a data <br>";
}
else{
    echo "sorry you does not insert a data " . mysqli_error($connection);
}


?>