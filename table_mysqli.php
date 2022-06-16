<?php

// connecting my we need to declare 3 variable

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

$table = "CREATE TABLE `special_worker` ( `s.no` INT(11) NOT NULL ,  `name` VARCHAR(15) NOT NULL ,  `age` INT(8) NOT NULL ,  `role` VARCHAR(20) NOT NULL ,    PRIMARY KEY  (`s.no`));";
$sql = mysqli_query($conn,$table);

if($sql){
    echo "Succefully your table will be created <br>";
}
else{
    echo "sorry your table does not created " . mysqli_error($connection);
}


?>