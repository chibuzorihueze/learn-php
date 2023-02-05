<?php

$integer_array = [ 1, 7, 10, 6, 4 ];

echo 'The 1st value here is ' . $integer_array[0] . PHP_EOL;
echo 'The 2nd value here is ' . $integer_array[1] . PHP_EOL;
echo 'The 3rd value here is ' . $integer_array[2] . PHP_EOL;
echo 'The 4th value here is ' . $integer_array[3] . PHP_EOL;
echo 'The 5th value here is ' . $integer_array[4] . PHP_EOL;
echo PHP_EOL;

// Get the length of the array.
$length = count( $integer_array );

echo 'The length of the integer array is ' . $length . PHP_EOL;
echo PHP_EOL;

// You can also dump an array quickly to see what is inside, like so:

var_dump( $integer_array );
