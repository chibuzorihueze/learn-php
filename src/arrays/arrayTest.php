<?php

//printing array index

$int_array = [1,2,3,4,5,56,55];

echo $int_array[3]. PHP_EOL;

$checkLenght = count($int_array);

echo $checkLenght. PHP_EOL;

//looping through the array

for($i=0; $i < $checkLenght; $i++){

    echo $int_array[$i];
};
