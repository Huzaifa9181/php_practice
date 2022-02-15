<?php

// break

for ($a = 1; $a <= 10; $a++){
    if($a == 5 ){
        break;
    }
    echo $a . "<br>";
}

echo "<br>";
echo "<br>";

// continue

for($a = 1; $a <= 10; $a++){
    if($a == 5){
        echo "its number 5 <br>";
        continue;
    }
    echo $a . "<br>";
}
?>