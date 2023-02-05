<?php

// Get principal, rate and time.
$principal = 500;
$rate      = 4;
$time      = 1;

// Get interest.
$interest = $principal * $rate * $time;

echo sprintf(
    'Dear customer you invested N%1$s at a rate of %2$s percent for %3$s year(s), therefore your interest is N%4$s.',
    number_format( $principal, 2 ),
    number_format( $rate / 100, 2 ),
    $time,
    number_format( $interest, 2)
);
