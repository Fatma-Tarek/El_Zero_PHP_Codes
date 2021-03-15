<?php
//===========================================================================
// Substr_Count(string [ optiona ],substring [ optional ],start ,length)
// 
// substr_compare(string1,string2,start position in string 1,length ,case);
// length ,case -->optional
//===========================================================================

$str = "I love PHP so much because PHP is cool And Easy Thats Why PHP is the Best";
//===========================================================================
// Substr_Count(string [ optiona ],substring [ optional ],start ,length)
//===========================================================================
$count = substr_count($str ,"PHP", 0,30);
echo $count ."<br>";
$count = substr_count($str ,"PHP",13,40);
echo $count;
echo "<br>";

//===========================================================================
//  substr_compare(string1,string2,start position,length ,case);
// case by default false mean case sensitive 
// if case == true then case insensitive 
//===========================================================================
$str1 = "Hello Fatma";
$str2 = "Fatma";
echo substr_compare($str1,$str2,0); /// H less than F
echo "<br>";
echo substr_compare($str1,$str2,6);
echo "<br>";

echo substr_compare($str1,$str2,7);
echo "<br>";

echo substr_compare($str1,$str2,5);
echo "<br>";

$str1 = "Fatma1234";
$str2 = "FATma";

echo substr_compare($str1,$str2,0,5);
echo "<br>";
echo substr_compare($str1,$str2,0,7);
echo "<br>";
echo substr_compare($str1,$str2,0,5,true);
echo "<br>";



