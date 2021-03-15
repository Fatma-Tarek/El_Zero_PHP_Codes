<?php 
//==================================================================================
// $array_fill(Index, Number, Value);
// Index : begin of index 
// Number : no of elements I want to put in array 
// Value : could be single value or array 
//==================================================================================

$array = array_fill(3,10,"Fatma");
echo "<pre>";
print_r($array);
echo "</pre>";

$array2 = array_fill(4,3,array("Milk","Water","meat"));
echo "<pre>";
print_r($array2);
echo "</pre>";

$array2 = array_fill(-2,3,"Fatma");
echo "<pre>";
print_r($array2);
echo "</pre>";
echo $array2[-1] ."<br>";


$array3 =array_fill(3,3,array_fill(2,4,array("Milk","Meat")));
echo "<pre>";
print_r($array3);
echo "</pre>";