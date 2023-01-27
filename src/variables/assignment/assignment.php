<?php

//Add two strings and output the value

$firstName = "Peter ";
$lastName = "Obi";

$fullName = $firstName . $lastName;
//echo $fullName;

/**
 * Remark: Good Attempt.
 * See the proper way to write PHP code.
 * Please pay attention to the use of 'Snake Casing'.
 * Please pay attention to the use of Single Quotes for assigning strings.
 * Please pay attention to the use of non-white spacing in variable strings.
 * It's important you start doing it the proper way as you are learning.
 *
 * @assignment 1
 */

// Get names into variables.
$student_name = 'Chibuzor Ihueze';
$teacher_name = 'Chigozie Orunta';

// Output strings to user.
echo $student_name . '\'s teacher is ' . $teacher_name . PHP_EOL;

// More Examples.
echo "$student_name is learning PHP from  $teacher_name" . PHP_EOL;
echo "{$student_name} and {$teacher_name} are learning the Piano" . PHP_EOL;
