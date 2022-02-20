<?php

    /* $name = "huzaifa ahmed";
    $num = 2.20;

    echo "My name is : " . $name . "<br>"; // concatination using variable
    echo $num;

    $a = true;
    echo $a ."<br>";
    var_dump($a);

    $b = null;  //empty
    echo $b ."<br>";
    var_dump($b);

    $arr = array("css","js","bootstrap");
    echo "<br>" . $arr[1] ."<br>";
    var_dump($arr);
    */


    // constant Variable
    define("name","huzaifa ahmed <br>");
    echo name;
    define("num",550);
    echo num;
    echo "<br>";

    // global variable

    $x = 6;
    $y = 9;

    function str(){
        global $x , $y; // global is important to write for using global variable
        $x = $x + $y;
    }

    str();

    echo $x;
?>