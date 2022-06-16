<?php

// connecting my we need to declare 3 variable

$servername = "localhost";
$username = "root";
$password = "";

// connecting a sql we need to use func mysqli

$connection = mysqli_connect($servername,$username,$password);

if(!$connection){
    echo "your connection will be failed! <br>";
}else{
    echo "you connect Succefully <br>";
}

// create a databse 

$db = "CREATE DATABASE WORKERS4";
$sql = mysqli_query($connection,$db);

if($sql){
    echo "Succefully your database will be created <br>";
}
else{
    echo "sorry your database does not created " . mysqli_error($connection);
}


?>