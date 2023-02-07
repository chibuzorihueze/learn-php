<?php

$integer_array = [ 1, 7, 10, 6, 4 ];

// Let's try to access an invalid index.
echo $integer_array[5] . PHP_EOL;

// Can you explain your answer???
/*
    Accessing an invalid index returns an error.
    An array starts from index zero (0).
    In this case, the size of this array is 5 and the last value is on index 4, hence the error. Index 5 is not recognized in this array.
*/