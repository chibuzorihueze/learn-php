<?php

// Get principal, rate and time.
$principal = 500;
$rate      = 4;
$time      = 1;

// Get interest.
$interest = $principal * $rate * $time;

echo sprintf(
    'Dear customer you invested N%d at a profit rate of N%.2f your intrest for %dyears is N%d',
    number_format($principal, 2),
    round($rate, 2),
    $time,
    number_format( $interest, 2)
);