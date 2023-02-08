<?php

//Printing array index

$int_array = [1,2,3,4,5,56,55];

echo $int_array[3]. PHP_EOL;

$checkLenght = count($int_array);

echo $checkLenght . PHP_EOL;

//Looping through the array

for($i=0; $i < $checkLenght; $i++){

    echo $int_array[$i] . PHP_EOL;

}; 

//Associative array

$name_age_array = ["34"=>"john", "pala"=>"33", "boa"=>"42"];
echo $name_age_array["34"] . $name_age_array["pala"];
echo "<br>";
echo "pala is " . $name_age_array['pala']. " years old". PHP_EOL;