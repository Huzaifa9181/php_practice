<?php

function call ($a)
{
    if($a <= 5){
        echo $a . "<br>";
        call($a + 1);
    }
    
}

call(1);

function factorial($number){
    if($number == 0){
        return 1factorial;
    }else{
        return ($number * factorial($number - 1));
    }
}

echo factorial(5);

?>