<?php
// calculate simple interest
// I = P * R * T (formula)

$principal = 500; //naira
$rate = 0.04; //value in precentage converted to decimal (4% to decimal 0,04)
$time = 2; // years

$intrest = $principal * $rate * $time;

echo "your intrest in 2 years is $intrest Naira";