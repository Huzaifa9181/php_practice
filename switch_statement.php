<?php

$month = 5;

switch($month){
    case 1:
        echo "January";
        break;

    case 2:
        echo "Feburary";
        break;

    case 3:
        echo "March";
        break;

    case 4:
        echo "April";
        break;

    case 5:
        echo "May";
        break;

    case 6:
        echo "June";         
        break;

    case 7:
        echo "July";
        break;

    case 8:
        echo "August";
        break;

    case 9:
        echo "September";
        break;

    case 10:
        echo "October";
        break;

    case 11:
        echo "November";       
        break;

    case 12:
        echo "December";
        break;
    default :
        echo "Enter a Valid Month Number";
}

// conditional switch case

$age = 25;

switch (true){
case ($age >= 15 && $age <= 20):
    echo "<br> you are eligible";
    break;

case ($age >= 21 && $age <= 30):
    echo "<br>you are not eligible";
    break;

default:
    echo "Enter a Valid Age";

}


?>

