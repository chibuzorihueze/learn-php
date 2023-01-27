<?php
// php program to calculate nepa bill

$tarifRate = 100;
$wats = 1000;
$hours = 720;

$total = $tarifRate * $hours / $wats ;
$bill = $total * 100;

//echo "the energy consumed in 30 days is $total kwh and your bill is: $bill Naira";

/**
 * Remark: Good Attempt.
 * See the proper way to write PHP code.
 * Please pay attention to the use of 'Snake Casing'.
 * Please pay attention to the use of the sprintf function.
 * Please pay attention to the use of the number_format function.
 * It's important you start doing it the proper way as you are learning.
 *
 * @assignment 2
 */

// Get monthly power consumption (kW/hr) and tarrif.
$monthly_tarrif = 1000;
$monthly_power_consumption = 27.5;
$monthly_bill = $monthly_tarrif * $monthly_power_consumption;

// When combining too many strings, its better to use the sprintf function.
echo sprintf(
	'You consumed %1$s kW/hr at a tarrif rate of N%2$s and therefore your total electricity bill is N%3$s',
	$monthly_power_consumption,
	number_format( $monthly_tarrif, 2),
	number_format( $monthly_bill, 2 )
) . PHP_EOL;
