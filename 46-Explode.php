<?php
//===================================================================================
// Explode : explode(Sperator ,String ,Limit);
// 						Sperator mandotry
// 						string mandotry
// 						limit not mandotry
// limit could be (- ,+ ,0)
//===================================================================================

$str ="Hello World Hi PHP";

echo $str ."<br>";

$arr = explode(" ",$str);
echo "<pre>";
print_r($arr);
echo "</pre>";

$str ="Hello,World,Hi,PHP";
echo $str ."<br>";

$arr = explode(",",$str);
echo "<pre>";
print_r($arr);
echo "</pre>";

$arr = explode(",",$str,2);
echo "<pre>";
print_r($arr);
echo "</pre>";

$arr = explode(",",$str,3);
echo "<pre>";
print_r($arr);
echo "</pre>";


$arr = explode(",",$str,-2); //remove last two elements
echo "<pre>";
print_r($arr);
echo "</pre>";

$arr = explode(",",$str,-1); //remove last element
echo "<pre>";
print_r($arr);
echo "</pre>";


$str ="file1,file2,file3,file4";
$arr =explode(",",$str);
for($i=0; $i< count($arr);$i++)
{
	echo "<link rel='stylesheet' href=css/" .$arr[$i] .">";
}











