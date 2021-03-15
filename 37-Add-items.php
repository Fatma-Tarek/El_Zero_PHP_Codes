<?php
//=======================================================================
// Array_Push: array_push(Array,Value1,Value2,Value3);
// Add Element in end of array 
//
// Array_Unshift: array_unshift(Array,VAlue1,Value2,Value3);
// Add Element at the begining of array 
//=======================================================================

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

//=======================================================================
// Array_Push: array_push(Array,Value1,Value2,Value3);
//=======================================================================
array_push($array,"python","Mysql","Ajax");

echo "<pre>";
print_r ($array); //Array after push 
echo "</pre>";

//=======================================================================
// Array_Unshift: array_unshift(Array,VAlue1,Value2,Value3);
//=======================================================================
array_unshift($array,"This is language I leaen:");

echo "<pre>";
print_r ($array); //Array after unshift
echo "</pre>";
