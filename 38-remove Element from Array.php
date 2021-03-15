<?php
//==================================================================
// array_pop($array); //Remove last Element in array 
//
// array_shift($array); //Remove first Element of Array 
//==================================================================
$array =array(
	"Html",
	"CSS",
	"PHP",
	"JS",
	"MySql",
	"python",
);

echo "<pre>";
print_r ($array);  // The Main Array 
echo "</pre>";

//==================================================================
// array_pop($array); //Remove last Element in array 
//==================================================================

$lastLang = array_pop($array);
echo "<pre>";
print_r ($array);  // The Array after pop
echo "</pre>";

echo $lastLang ."<br>";

//==================================================================
// array_shift($array); //Remove first Element of Array 
//==================================================================

$firstLang = array_shift($array);
echo "<pre>";
print_r ($array);  // The Array after shift
echo "</pre>";

echo $firstLang ."<br>";