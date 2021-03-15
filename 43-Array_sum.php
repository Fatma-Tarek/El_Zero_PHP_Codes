<?php
//=====================================================================
// array_sum(Array);
// can sum Associative and Indexed Array.
//=====================================================================

$array = array(20,30,15,11,1);
$sum =array_sum($array);
echo $sum. "<br>";


$array = array(20,30,"Tarek",15,"fatma",11,1); #ignore String only integers
$sum =array_sum($array);
echo $sum. "<br>";

$array = array(20,30,1.5,11.6,1); #can sum floating number                                                                                    
$sum =array_sum($array);
echo $sum. "<br>";


$array = array(
	0 => 20,
	0 => 30,
	2 => 1.5,
	3 => 11.6,
	4 => 1
);
$sum =array_sum($array);
echo $sum. "<br>";


