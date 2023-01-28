<?php
// calculate simple interest
// I = P * R * T (formula)

$principal = 500; //naira
$rate = 0.04; //value in precentage converted to decimal (4% to decimal 0,04)
$time = 2; // years

$intrest = $principal * $rate * $time;

echo sprintf(
    'Dear customer you invested N%d at a profit rate of N%.2f your intrest for %dyears is N%d',
    number_format($principal, 2),
    round($rate, 2),
    $time,
    $intrest,
);