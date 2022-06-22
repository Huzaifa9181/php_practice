<?php

// $a = readfile('myfile.txt');
// readfile('my_file.html');

// file pointer
// fopen , fread , fclose

// $fptr = fopen( 'myfile.txt' , 'r');
// echo fread($fptr , filesize('myfile.txt'));
// fclose($fptr);
// echo var_dump($fptr);s

/////// fgetc , fgets
//// fgetc read one charater in whole file

// $fptr = fopen("myfile.txt" , "r");

// while($a = fgetc($fptr)){
//     echo $a;
// }


//// fgets read one line in one time 

// $fptr = fopen("myfile.txt" , "r");

// while($a = fgets($fptr)){
//     echo $a;

// }

//fclose("myfile.txt");

// write in file 

// $fptr = fopen("myfile.txt" , "w");
// $fptr2 = fopen("myfile.txt" , "r");
// fwrite($fptr , "this is a new content of this file . this file is one of the best file in ever.");
// echo fread($fptr2 , filesize("myfile.txt"));

// fclose($fptr);

//append text in end of te file 

// $fptr = fopen("myfile.txt" , "a");
// fwrite( $fptr,"the append content of this file \n");


?>