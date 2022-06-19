<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "form";

$conn = mysqli_connect($servername,$username,$password,$database);

if(!$conn){
    echo "your connection will be failed! <br>";
}else{
    echo "you connect Succefully <br>";
}

$ins = "DELETE FROM `contact` WHERE `name` = 'Huzaifa' LIMIT 4";
$sql = mysqli_query($conn,$ins);

$aff = mysqli_affected_rows($conn);
echo "The $aff number of rows deleted <br>";
if($sql){
    echo "Successfully your query executed <br>";
}else{
    $err = mysqli_error();
    echo "<strong> Error ! </strong> your query doesnot executed <br>";
}

?>