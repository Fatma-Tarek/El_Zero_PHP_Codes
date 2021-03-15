<?php
//=================================================================
// StrToLower: strtoLower(String)
// 
// StrToUpper : strtoupper(String)
//
// Lcfirst : lcfirst(String)
//
// Ucfirst : ucfirst(String)
//
// ucwords //every capitalize every character in every word 
//=================================================================

$str ="Hello I Love PHP So Much";
$lower = strtolower($str);
echo $lower;
echo "<br>";

$upper = strtoupper($str);
echo $upper;
echo "<br>";

$str = "Hello I love PHP so much";
$first = lcfirst($str);
echo $first;
echo "<br>";

$str = "hello I love PHP so much";
$first = ucfirst($str);
echo $first;
echo "<br>";

$firstOfAll = ucwords($str);
echo $firstOfAll;
echo "<br>";
