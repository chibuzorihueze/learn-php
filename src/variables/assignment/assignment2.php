<?php

$tarifRate = 100;
$wats = 1000;
$hours = 720;

$total = $tarifRate * $hours / $wats ;
$bill = $total * 100;

echo "the energy consumed in 30 days is $total kwh and your bill is: $bill Naira";