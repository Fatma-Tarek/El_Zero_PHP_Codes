<?php
//======================================================================================================
// array_rand($array_name,Number);  /// bytal3 index 
// Number : No of Index 
//======================================================================================================

$array = array("Fatma","Tarek","Abdallah","Omran","Sherif");

$randomKey = array_rand($array , 2);
 
var_dump($randomKey);
echo "<br>";
echo gettype($randomKey)."<br>";
echo "<pre>";
print_r($array);
echo "</pre>";


echo $array[$randomKey[0]] ."<br>";
echo $array[$randomKey[1]] ."<br>";


