<?php

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

$ins = "SELECT * FROM `new_worker`";
$sql = mysqli_query($conn,$ins);

$num = mysqli_num_rows($sql);
echo "We found " . $num . " records in database ";
if($num > 0){
    
    while($row = mysqli_fetch_assoc($sql)){
        echo '<pre>';
        print_r($row);
        echo '</pre>';
    }
    

}


?>